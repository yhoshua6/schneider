<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateempleadoRequest;
use App\Http\Requests\UpdateempleadoRequest;
use App\Repositories\empleadoRepository;
use App\Repositories\tipoEmpleadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class empleadoController extends AppBaseController
{
    /** @var  empleadoRepository */
    private $empleadoRepository;

    /** @var  tipoEmpleadoRepository */
    private $tipoEmpleadoRepository;

    public function __construct(empleadoRepository $empleadoRepo, tipoEmpleadoRepository $tipoEmpleadoRepo)
    {
        $this->empleadoRepository = $empleadoRepo;
        $this->tipoEmpleadoRepository = $tipoEmpleadoRepo;
    }

    /**
     * Display a listing of the empleado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->empleadoRepository->pushCriteria(new RequestCriteria($request));
        $empleados = $this->empleadoRepository->all();

        return view('empleados.index')
            ->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new empleado.
     *
     * @return Response
     */
    public function create()
    {
        $tipoEmpleados = $this->tipoEmpleadoRepository->all();

        $tipoEmpleadosArray=[];
        $tipoEmpleadosArray = array_add($tipoEmpleadosArray, 0, "Selecciona una opción");

        foreach ($tipoEmpleados as $te){ 
            $tipoEmpleadosArray = array_add($tipoEmpleadosArray, $te->id , $te->nombre);
        }
        return view('empleados.create')
            ->with('tipoEmpleados', $tipoEmpleadosArray);
    }

    /**
     * Store a newly created empleado in storage.
     *
     * @param CreateempleadoRequest $request
     *
     * @return Response
     */
    public function store(CreateempleadoRequest $request)
    {
        $input = $request->all();

        $empleado = $this->empleadoRepository->create($input);

        Flash::success('Empleado saved successfully.');

        return redirect(route('empleados.index'));
    }

    /**
     * Display the specified empleado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $empleado = $this->empleadoRepository->findWithoutFail($id);

        if (empty($empleado)) {
            Flash::error('Empleado not found');

            return redirect(route('empleados.index'));
        }

        return view('empleados.show')->with('empleado', $empleado);
    }

    /**
     * Show the form for editing the specified empleado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $empleado = $this->empleadoRepository->findWithoutFail($id);
        $tipoEmpleados = $this->tipoEmpleadoRepository->all();

        $tipoEmpleadosArray=[];
        $tipoEmpleadosArray = array_add($tipoEmpleadosArray, 0, "Selecciona una opción");

        foreach ($tipoEmpleados as $te){ 
            $tipoEmpleadosArray = array_add($tipoEmpleadosArray, $te->id , $te->nombre);
        }

        if (empty($empleado)) {
            Flash::error('Empleado not found');

            return redirect(route('empleados.index'));
        }

        return view('empleados.edit')
            ->with('empleado', $empleado)
            ->with('tipoEmpleados', $tipoEmpleadosArray);
    }

    /**
     * Update the specified empleado in storage.
     *
     * @param  int              $id
     * @param UpdateempleadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateempleadoRequest $request)
    {
        $empleado = $this->empleadoRepository->findWithoutFail($id);

        if (empty($empleado)) {
            Flash::error('Empleado not found');

            return redirect(route('empleados.index'));
        }

        $empleado = $this->empleadoRepository->update($request->all(), $id);

        Flash::success('Empleado updated successfully.');

        return redirect(route('empleados.index'));
    }

    /**
     * Remove the specified empleado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $empleado = $this->empleadoRepository->findWithoutFail($id);

        if (empty($empleado)) {
            Flash::error('Empleado not found');

            return redirect(route('empleados.index'));
        }

        $this->empleadoRepository->delete($id);

        Flash::success('Empleado deleted successfully.');

        return redirect(route('empleados.index'));
    }
}

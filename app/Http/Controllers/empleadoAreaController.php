<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateempleadoAreaRequest;
use App\Http\Requests\UpdateempleadoAreaRequest;
use App\Repositories\empleadoAreaRepository;
use App\Repositories\empleadoRepository;
use App\Repositories\produccionAreaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class empleadoAreaController extends AppBaseController
{
    /** @var  empleadoAreaRepository */
    private $empleadoAreaRepository;

    /** @var  empleadoRepository */
    private $empleadoRepository;

    /** @var  produccionAreaRepository */
    private $produccionAreaRepository;

    public function __construct(empleadoAreaRepository $empleadoAreaRepo, empleadoRepository $empleadoRepo, produccionAreaRepository $produccionAreaRepo)
    {
        $this->empleadoAreaRepository = $empleadoAreaRepo;
        $this->empleadoRepository = $empleadoRepo;
        $this->produccionAreaRepository = $produccionAreaRepo;
    }

    /**
     * Display a listing of the empleadoArea.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->empleadoAreaRepository->pushCriteria(new RequestCriteria($request));
        $empleadoAreas = $this->empleadoAreaRepository->all();

        return view('empleado_areas.index')
            ->with('empleadoAreas', $empleadoAreas);
    }

    /**
     * Show the form for creating a new empleadoArea.
     *
     * @return Response
     */
    public function create()
    {
        $empleados = $this->empleadoRepository->all();
        $produccionAreas = $this->produccionAreaRepository->all();

        $EmpleadosArray=[];
        $EmpleadosArray = array_add($EmpleadosArray, 0, "Selecciona una opción");

        $produccionAreasArray=[];
        $produccionAreasArray = array_add($produccionAreasArray, 0, "Selecciona una opción");

        foreach ($empleados as $sku){ 
            $EmpleadosArray = array_add($EmpleadosArray, $sku->id , $sku->nombre);
        }

        foreach ($produccionAreas as $pa){ 
            $produccionAreasArray = array_add($produccionAreasArray, $pa->id , $pa->nombre);
        }

        return view('empleado_areas.create')
            ->with('empleados', $EmpleadosArray)
            ->with('produccionAreas', $produccionAreasArray);
    }

    /**
     * Store a newly created empleadoArea in storage.
     *
     * @param CreateempleadoAreaRequest $request
     *
     * @return Response
     */
    public function store(CreateempleadoAreaRequest $request)
    {
        $input = $request->all();

        $empleadoArea = $this->empleadoAreaRepository->create($input);

        Flash::success('Empleado Area saved successfully.');

        return redirect(route('empleadoAreas.index'));
    }

    /**
     * Display the specified empleadoArea.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $empleadoArea = $this->empleadoAreaRepository->findWithoutFail($id);

        if (empty($empleadoArea)) {
            Flash::error('Empleado Area not found');

            return redirect(route('empleadoAreas.index'));
        }

        return view('empleado_areas.show')->with('empleadoArea', $empleadoArea);
    }

    /**
     * Show the form for editing the specified empleadoArea.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $empleadoArea = $this->empleadoAreaRepository->findWithoutFail($id);
        $empleados = $this->empleadoRepository->all();
        $produccionAreas = $this->produccionAreaRepository->all();

        $EmpleadosArray=[];
        $EmpleadosArray = array_add($EmpleadosArray, 0, "Selecciona una opción");

        $produccionAreasArray=[];
        $produccionAreasArray = array_add($produccionAreasArray, 0, "Selecciona una opción");

        foreach ($empleados as $sku){ 
            $EmpleadosArray = array_add($EmpleadosArray, $sku->id , $sku->nombre);
        }

        foreach ($produccionAreas as $pa){ 
            $produccionAreasArray = array_add($produccionAreasArray, $pa->id , $pa->nombre);
        }

        if (empty($empleadoArea)) {
            Flash::error('Empleado Area not found');

            return redirect(route('empleadoAreas.index'));
        }

        return view('empleado_areas.edit')
            ->with('empleadoArea', $empleadoArea)
            ->with('empleados', $EmpleadosArray)
            ->with('produccionAreas', $produccionAreasArray);
    }

    /**
     * Update the specified empleadoArea in storage.
     *
     * @param  int              $id
     * @param UpdateempleadoAreaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateempleadoAreaRequest $request)
    {
        $empleadoArea = $this->empleadoAreaRepository->findWithoutFail($id);

        if (empty($empleadoArea)) {
            Flash::error('Empleado Area not found');

            return redirect(route('empleadoAreas.index'));
        }

        $empleadoArea = $this->empleadoAreaRepository->update($request->all(), $id);

        Flash::success('Empleado Area updated successfully.');

        return redirect(route('empleadoAreas.index'));
    }

    /**
     * Remove the specified empleadoArea from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $empleadoArea = $this->empleadoAreaRepository->findWithoutFail($id);

        if (empty($empleadoArea)) {
            Flash::error('Empleado Area not found');

            return redirect(route('empleadoAreas.index'));
        }

        $this->empleadoAreaRepository->delete($id);

        Flash::success('Empleado Area deleted successfully.');

        return redirect(route('empleadoAreas.index'));
    }
}

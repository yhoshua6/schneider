<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproduccionAreaRequest;
use App\Http\Requests\UpdateproduccionAreaRequest;
use App\Repositories\produccionAreaRepository;
use App\Repositories\empleadoRepository;
use App\Repositories\estacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class produccionAreaController extends AppBaseController
{
    /** @var  produccionAreaRepository */
    private $produccionAreaRepository;

    /** @var  empleadoRepository */
    private $empleadoRepository;

    /** @var  estacionRepository */
    private $estacionRepository;

    public function __construct(produccionAreaRepository $produccionAreaRepo, empleadoRepository $empleadoRepo, estacionRepository $estacionRepo)
    {
        $this->produccionAreaRepository = $produccionAreaRepo;
        $this->empleadoRepository = $empleadoRepo;
        $this->estacionRepository = $estacionRepo;
    }

    /**
     * Display a listing of the produccionArea.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->produccionAreaRepository->pushCriteria(new RequestCriteria($request));
        $produccionAreas = $this->produccionAreaRepository->all();

        $empleados = $this->empleadoRepository->all();
        $estacions = $this->estacionRepository->all();
        foreach ($produccionAreas as $pa){ 
            foreach ($empleados as $em){ 
                if($pa->empleado_id == $em->id){
                    $pa->empleado = $em->nombre;
                }
            }
            foreach ($estacions as $es){ 
                if($pa->estacion_id == $es->id){
                    $pa->estacion = $es->nombre;
                }
            }
        }

        return view('produccion_areas.index')
            ->with('produccionAreas', $produccionAreas);
    }

    /**
     * Show the form for creating a new produccionArea.
     *
     * @return Response
     */
    public function create()
    {
        $empleados = $this->empleadoRepository->all();
        $empleadosArray=[];
        $empleadosArray = array_add($empleadosArray, 0, "Selecciona una opción");
        foreach ($empleados as $em){ 
            $empleadosArray = array_add($empleadosArray, $em->id , $em->nombre);
        }

        $estacions = $this->estacionRepository->all();
        $estacionsArray=[];
        $estacionsArray = array_add($estacionsArray, 0, "Selecciona una opción");
        foreach ($estacions as $es){ 
            $estacionsArray = array_add($estacionsArray, $es->id , $es->nombre);
        }

        return view('produccion_areas.create')
            ->with('empleados', $empleadosArray)
            ->with('estacions', $estacionsArray);
    }

    /**
     * Store a newly created produccionArea in storage.
     *
     * @param CreateproduccionAreaRequest $request
     *
     * @return Response
     */
    public function store(CreateproduccionAreaRequest $request)
    {
        $input = $request->all();

        $produccionArea = $this->produccionAreaRepository->create($input);

        Flash::success('Produccion Area saved successfully.');

        return redirect(route('produccionAreas.index'));
    }

    /**
     * Display the specified produccionArea.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $produccionArea = $this->produccionAreaRepository->findWithoutFail($id);

        if (empty($produccionArea)) {
            Flash::error('Produccion Area not found');

            return redirect(route('produccionAreas.index'));
        }

        $empleados = $this->empleadoRepository->all();
        $estacions = $this->estacionRepository->all();
            foreach ($empleados as $em){ 
                if($produccionArea->empleado_id == $em->id){
                    $produccionArea->empleado = $em->nombre;
                }
            }
            foreach ($estacions as $es){ 
                if($produccionArea->estacion_id == $es->id){
                    $produccionArea->estacion = $es->nombre;
                }
            }

        return view('produccion_areas.show')->with('produccionArea', $produccionArea);
    }

    /**
     * Show the form for editing the specified produccionArea.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $produccionArea = $this->produccionAreaRepository->findWithoutFail($id);

        $empleados = $this->empleadoRepository->all();
        $empleadosArray=[];
        $empleadosArray = array_add($empleadosArray, 0, "Selecciona una opción");
        foreach ($empleados as $em){ 
            $empleadosArray = array_add($empleadosArray, $em->id , $em->nombre);
        }

        $estacions = $this->estacionRepository->all();
        $estacionsArray=[];
        $estacionsArray = array_add($estacionsArray, 0, "Selecciona una opción");
        foreach ($estacions as $es){ 
            $estacionsArray = array_add($estacionsArray, $es->id , $es->nombre);
        }

        if (empty($produccionArea)) {
            Flash::error('Produccion Area not found');

            return redirect(route('produccionAreas.index'));
        }

        return view('produccion_areas.edit')
            ->with('produccionArea', $produccionArea)
            ->with('empleados', $empleadosArray)
            ->with('estacions', $estacionsArray);
    }

    /**
     * Update the specified produccionArea in storage.
     *
     * @param  int              $id
     * @param UpdateproduccionAreaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproduccionAreaRequest $request)
    {
        $produccionArea = $this->produccionAreaRepository->findWithoutFail($id);

        if (empty($produccionArea)) {
            Flash::error('Produccion Area not found');

            return redirect(route('produccionAreas.index'));
        }

        $produccionArea = $this->produccionAreaRepository->update($request->all(), $id);

        Flash::success('Produccion Area updated successfully.');

        return redirect(route('produccionAreas.index'));
    }

    /**
     * Remove the specified produccionArea from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $produccionArea = $this->produccionAreaRepository->findWithoutFail($id);

        if (empty($produccionArea)) {
            Flash::error('Produccion Area not found');

            return redirect(route('produccionAreas.index'));
        }

        $this->produccionAreaRepository->delete($id);

        Flash::success('Produccion Area deleted successfully.');

        return redirect(route('produccionAreas.index'));
    }
}

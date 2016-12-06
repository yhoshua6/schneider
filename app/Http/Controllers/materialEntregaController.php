<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatematerialEntregaRequest;
use App\Http\Requests\UpdatematerialEntregaRequest;
use App\Repositories\materialEntregaRepository;
use App\Repositories\productosRepository;
use App\Repositories\empleadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class materialEntregaController extends AppBaseController
{
    /** @var  materialEntregaRepository */
    private $materialEntregaRepository;

    /** @var  productosRepository */
    private $productosRepository;

    /** @var  empleadoRepository */
    private $empleadoRepository;

    public function __construct(materialEntregaRepository $materialEntregaRepo, productosRepository $productosRepo, empleadoRepository $empleadoRepo)
    {
        $this->materialEntregaRepository = $materialEntregaRepo;
        $this->productosRepository = $productosRepo;
        $this->empleadoRepository = $empleadoRepo;
    }

    /**
     * Display a listing of the materialEntrega.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->materialEntregaRepository->pushCriteria(new RequestCriteria($request));
        $materialEntregas = $this->materialEntregaRepository->all();

        return view('material_entregas.index')
            ->with('materialEntregas', $materialEntregas);
    }

    /**
     * Show the form for creating a new materialEntrega.
     *
     * @return Response
     */
    public function create()
    {
        $productos = $this->productosRepository->all();
        $productosArray=[];
        $productosArray = array_add($productosArray, 0, "Selecciona una opción");
        foreach ($productos as $pro){ 
            $productosArray = array_add($productosArray, $pro->id , $pro->nombre);
        }

        $empleados = $this->empleadoRepository->all();
        $empleadosArray=[];
        $empleadosArray = array_add($empleadosArray, 0, "Selecciona una opción");
        foreach ($empleados as $em){ 
            $empleadosArray = array_add($empleadosArray, $em->id , $em->nombre);
        }

        return view('material_entregas.create')
            ->with('productos', $productosArray)
            ->with('empleados', $empleadosArray);
    }

    /**
     * Store a newly created materialEntrega in storage.
     *
     * @param CreatematerialEntregaRequest $request
     *
     * @return Response
     */
    public function store(CreatematerialEntregaRequest $request)
    {
        $input = $request->all();

        $materialEntrega = $this->materialEntregaRepository->create($input);

        Flash::success('Material Entrega saved successfully.');

        return redirect(route('materialEntregas.index'));
    }

    /**
     * Display the specified materialEntrega.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $materialEntrega = $this->materialEntregaRepository->findWithoutFail($id);

        if (empty($materialEntrega)) {
            Flash::error('Material Entrega not found');

            return redirect(route('materialEntregas.index'));
        }

        return view('material_entregas.show')->with('materialEntrega', $materialEntrega);
    }

    /**
     * Show the form for editing the specified materialEntrega.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $materialEntrega = $this->materialEntregaRepository->findWithoutFail($id);

        $productos = $this->productosRepository->all();
        $productosArray=[];
        $productosArray = array_add($productosArray, 0, "Selecciona una opción");
        foreach ($productos as $pro){ 
            $productosArray = array_add($productosArray, $pro->id , $pro->nombre);
        }

        $empleados = $this->empleadoRepository->all();
        $empleadosArray=[];
        $empleadosArray = array_add($empleadosArray, 0, "Selecciona una opción");
        foreach ($empleados as $em){ 
            $empleadosArray = array_add($empleadosArray, $em->id , $em->nombre);
        }

        if (empty($materialEntrega)) {
            Flash::error('Material Entrega not found');

            return redirect(route('materialEntregas.index'));
        }

        return view('material_entregas.edit')
            ->with('materialEntrega', $materialEntrega)
            ->with('productos', $productosArray)
            ->with('empleados', $empleadosArray);
    }

    /**
     * Update the specified materialEntrega in storage.
     *
     * @param  int              $id
     * @param UpdatematerialEntregaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatematerialEntregaRequest $request)
    {
        $materialEntrega = $this->materialEntregaRepository->findWithoutFail($id);

        if (empty($materialEntrega)) {
            Flash::error('Material Entrega not found');

            return redirect(route('materialEntregas.index'));
        }

        $materialEntrega = $this->materialEntregaRepository->update($request->all(), $id);

        Flash::success('Material Entrega updated successfully.');

        return redirect(route('materialEntregas.index'));
    }

    /**
     * Remove the specified materialEntrega from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $materialEntrega = $this->materialEntregaRepository->findWithoutFail($id);

        if (empty($materialEntrega)) {
            Flash::error('Material Entrega not found');

            return redirect(route('materialEntregas.index'));
        }

        $this->materialEntregaRepository->delete($id);

        Flash::success('Material Entrega deleted successfully.');

        return redirect(route('materialEntregas.index'));
    }
}

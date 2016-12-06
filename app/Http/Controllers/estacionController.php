<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateestacionRequest;
use App\Http\Requests\UpdateestacionRequest;
use App\Repositories\estacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class estacionController extends AppBaseController
{
    /** @var  estacionRepository */
    private $estacionRepository;

    public function __construct(estacionRepository $estacionRepo)
    {
        $this->estacionRepository = $estacionRepo;
    }

    /**
     * Display a listing of the estacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estacionRepository->pushCriteria(new RequestCriteria($request));
        $estacions = $this->estacionRepository->all();

        return view('estacions.index')
            ->with('estacions', $estacions);
    }

    /**
     * Show the form for creating a new estacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('estacions.create');
    }

    /**
     * Store a newly created estacion in storage.
     *
     * @param CreateestacionRequest $request
     *
     * @return Response
     */
    public function store(CreateestacionRequest $request)
    {
        $input = $request->all();

        $estacion = $this->estacionRepository->create($input);

        Flash::success('Estacion saved successfully.');

        return redirect(route('estacions.index'));
    }

    /**
     * Display the specified estacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estacion = $this->estacionRepository->findWithoutFail($id);

        if (empty($estacion)) {
            Flash::error('Estacion not found');

            return redirect(route('estacions.index'));
        }

        return view('estacions.show')->with('estacion', $estacion);
    }

    /**
     * Show the form for editing the specified estacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estacion = $this->estacionRepository->findWithoutFail($id);

        if (empty($estacion)) {
            Flash::error('Estacion not found');

            return redirect(route('estacions.index'));
        }

        return view('estacions.edit')->with('estacion', $estacion);
    }

    /**
     * Update the specified estacion in storage.
     *
     * @param  int              $id
     * @param UpdateestacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateestacionRequest $request)
    {
        $estacion = $this->estacionRepository->findWithoutFail($id);

        if (empty($estacion)) {
            Flash::error('Estacion not found');

            return redirect(route('estacions.index'));
        }

        $estacion = $this->estacionRepository->update($request->all(), $id);

        Flash::success('Estacion updated successfully.');

        return redirect(route('estacions.index'));
    }

    /**
     * Remove the specified estacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estacion = $this->estacionRepository->findWithoutFail($id);

        if (empty($estacion)) {
            Flash::error('Estacion not found');

            return redirect(route('estacions.index'));
        }

        $this->estacionRepository->delete($id);

        Flash::success('Estacion deleted successfully.');

        return redirect(route('estacions.index'));
    }
}

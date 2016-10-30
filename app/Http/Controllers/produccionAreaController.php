<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproduccionAreaRequest;
use App\Http\Requests\UpdateproduccionAreaRequest;
use App\Repositories\produccionAreaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class produccionAreaController extends AppBaseController
{
    /** @var  produccionAreaRepository */
    private $produccionAreaRepository;

    public function __construct(produccionAreaRepository $produccionAreaRepo)
    {
        $this->produccionAreaRepository = $produccionAreaRepo;
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
        return view('produccion_areas.create');
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

        if (empty($produccionArea)) {
            Flash::error('Produccion Area not found');

            return redirect(route('produccionAreas.index'));
        }

        return view('produccion_areas.edit')->with('produccionArea', $produccionArea);
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

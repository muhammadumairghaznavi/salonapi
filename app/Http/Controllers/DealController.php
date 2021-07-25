<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDealRequest;
use App\Http\Requests\UpdateDealRequest;
use App\Repositories\DealRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DealController extends AppBaseController
{
    /** @var  DealRepository */
    private $dealRepository;

    public function __construct(DealRepository $dealRepo)
    {
        $this->dealRepository = $dealRepo;
    }

    /**
     * Display a listing of the Deal.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $deals = $this->dealRepository->all();

        return view('deals.index')
            ->with('deals', $deals);
    }

    /**
     * Show the form for creating a new Deal.
     *
     * @return Response
     */
    public function create()
    {
        return view('deals.create');
    }

    /**
     * Store a newly created Deal in storage.
     *
     * @param CreateDealRequest $request
     *
     * @return Response
     */
    public function store(CreateDealRequest $request)
    {
        $input = $request->all();

        $deal = $this->dealRepository->create($input);

        Flash::success('Deal saved successfully.');

        return redirect(route('deals.index'));
    }

    /**
     * Display the specified Deal.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $deal = $this->dealRepository->find($id);

        if (empty($deal)) {
            Flash::error('Deal not found');

            return redirect(route('deals.index'));
        }

        return view('deals.show')->with('deal', $deal);
    }

    /**
     * Show the form for editing the specified Deal.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $deal = $this->dealRepository->find($id);

        if (empty($deal)) {
            Flash::error('Deal not found');

            return redirect(route('deals.index'));
        }

        return view('deals.edit')->with('deal', $deal);
    }

    /**
     * Update the specified Deal in storage.
     *
     * @param int $id
     * @param UpdateDealRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDealRequest $request)
    {
        $deal = $this->dealRepository->find($id);

        if (empty($deal)) {
            Flash::error('Deal not found');

            return redirect(route('deals.index'));
        }

        $deal = $this->dealRepository->update($request->all(), $id);

        Flash::success('Deal updated successfully.');

        return redirect(route('deals.index'));
    }

    /**
     * Remove the specified Deal from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $deal = $this->dealRepository->find($id);

        if (empty($deal)) {
            Flash::error('Deal not found');

            return redirect(route('deals.index'));
        }

        $this->dealRepository->delete($id);

        Flash::success('Deal deleted successfully.');

        return redirect(route('deals.index'));
    }
}

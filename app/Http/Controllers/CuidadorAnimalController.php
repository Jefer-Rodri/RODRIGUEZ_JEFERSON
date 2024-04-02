<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\CuidadorAnimalController as CuidadorAnimalControllerRequest;

class CuidadorAnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param CuidadorAnimalControllerRequest\CuidadorAnimalControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(CuidadorAnimalControllerRequest\CuidadorAnimalControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param CuidadorAnimalControllerRequest\CuidadorAnimalControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(CuidadorAnimalControllerRequest\CuidadorAnimalControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param CuidadorAnimalControllerRequest\CuidadorAnimalControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(CuidadorAnimalControllerRequest\CuidadorAnimalControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param CuidadorAnimalControllerRequest\CuidadorAnimalControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(CuidadorAnimalControllerRequest\CuidadorAnimalControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param CuidadorAnimalControllerRequest\CuidadorAnimalControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(CuidadorAnimalControllerRequest\CuidadorAnimalControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}

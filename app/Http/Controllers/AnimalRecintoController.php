<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\AnimalRecintoController as AnimalRecintoControllerRequest;

class AnimalRecintoController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param AnimalRecintoControllerRequest\AnimalRecintoControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(AnimalRecintoControllerRequest\AnimalRecintoControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param AnimalRecintoControllerRequest\AnimalRecintoControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(AnimalRecintoControllerRequest\AnimalRecintoControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param AnimalRecintoControllerRequest\AnimalRecintoControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(AnimalRecintoControllerRequest\AnimalRecintoControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param AnimalRecintoControllerRequest\AnimalRecintoControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(AnimalRecintoControllerRequest\AnimalRecintoControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param AnimalRecintoControllerRequest\AnimalRecintoControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(AnimalRecintoControllerRequest\AnimalRecintoControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}

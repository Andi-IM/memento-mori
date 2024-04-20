<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Village;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVillageRequest;
use App\Http\Requests\UpdateVillageRequest;
use App\Http\Resources\VillageResource;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $villages = Village::simplePaginate(15);
        return VillageResource::collection($villages);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVillageRequest $request)
    {
        if ($request->validated()) {
            $village = Village::create([
                "code" => $request->code,
                "name" => $request->name,
                "meta" =>  json_encode(["lat" => $request->lat, "long" => $request->long, "pos" => $request->pos])
            ]);
            return VillageResource::make($village);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Village $village)
    {
        return VillageResource::make($village);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVillageRequest $request, Village $village)
    {
        if ($request->validated()) {
            $village->update([
                "name" => $request->name,
                "meta" =>  json_encode(["lat" => $request->lat, "long" => $request->long, "pos" => $request->pos])
            ]);
            return VillageResource::make($village);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Village $village)
    {
        $village->delete();
        return response()->noContent();
    }
}

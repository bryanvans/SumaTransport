<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'departure_time' => $this->departure_time,
            'arrival_time' => $this->arrival_time,
            'bus' => $this->bus->name,
            'route' => $this->route->name,
            '_links' => [
                'self' => route('schedules.show', ['schedule' => $this->id]),
                'route_details' => route('routes.show', ['route' => $this->route->id]),
                'bus_details' => route('buses.show', ['bus' => $this->bus->id]),
            ]
        ];
    }
}

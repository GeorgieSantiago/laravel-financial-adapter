<?php
namespace G2\FinancialAdapter\Services\Response;

use Illuminate\Http\Resources\Json\JsonResource;
/**
 * @OA\Schema(
 *      title="Response for TDAmeritrade",
 *      description="objects",
 *      type="object"
 * )
 */
class TdAmeritradeOrderResponse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($item) : array
    {
       return [];
    }
}
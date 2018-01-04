<?php

namespace App\Http\Controllers\API\Characters;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Characters\Auctionhouse as Auction;
use App\Http\Resources\Auction as AuctionResource;

class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Auctions
        $auctions = Auction::paginate(30);

        /*
            Return Collection of auctions as a resource
        */
        return AuctionResource::collection($auctions);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*
            Get Auction
        */

        $auction = Auction::findOrFail($id);

        /*
            Return single auction as a resource
        */

        return new AuctionResource($auction);
    }
}

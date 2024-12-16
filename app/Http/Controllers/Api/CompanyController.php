<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\FeedbackResource;
use App\Http\Resources\ShowCompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = CompanyResource::collection(Company::where('deleted_at',null)->orderBy('id','desc')->get());
        return response()->json([
            'companies' => $companies,
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($company_slug)
    {
        $company = Company::where('slug',$company_slug)->whereNull('deleted_at')->first();
        if (!$company) {
            return response()->json([
                'error' => 'Kompaniya topilmadi',
                'message' => 'Belgilangan kompaniya mavjud emas'
            ], 404);
        }
        
        $category = $company->category()->whereNull('deleted_at')->orderBy('id','desc')->get();
        if ($category->isEmpty()) {
            $category = ['message' => 'Kompaniyaning kategoriyalari mavjud emas'];
        } else {
            $category = CategoryResource::collection($category);
        }
        $feedback = $company->feedback()->orderBy('id','desc')->get();
        if ($feedback->isEmpty()) {
            $feedback = ['message' => 'Mavjud emas'];
        } else {
            $feedback = FeedbackResource::collection($feedback);
        }
        
        return response()->json([
            'company' => new ShowCompanyResource($company),
            'category' => $category,
            'feedback' => $feedback,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

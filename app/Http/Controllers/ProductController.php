<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Lista todos os produtos com paginação
    public function index(): JsonResponse
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(10);

        return response()->json($products);
    }

    //Cria um novo produto.
    public function store(ProductRequest $request): JsonResponse
    {
        $product = Product::create($request->validated());

        return response()->json([
            'message' => 'Produto criado com sucesso.',
            'data'    => $product,
        ], 201);
    }

    // Exibe um produto específico.
    public function show(Product $product): JsonResponse
    {
        return response()->json($product);
    }

    // Atualiza um produto existente.
    public function update(ProductRequest $request, Product $product): JsonResponse
    {
        $product->update($request->validated());

        return response()->json([
            'message' => 'Produto atualizado com sucesso.',
            'data'    => $product->fresh(),
        ]);
    }

    // Remove um produto.
    public function destroy(Product $product): JsonResponse
    {
        $product->delete();

        return response()->json(null, 204);
    }
}

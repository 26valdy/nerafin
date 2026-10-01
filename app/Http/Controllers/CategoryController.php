<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(Request $request): View
    {
        $query = Category::query();

        if ($request->filled('type')) {
            $query->where('type', $request->string('type')->toString());
        }

        if ($request->filled('search')) {
            $search = $request->string('search')->toString();

            $query->where('name', 'like', "%{$search}%");
        }

        $categories = $query
            ->orderBy('id')
            ->paginate(6)
            ->withQueryString();

        $totalCategories = Category::count();

        $activeIncome = Category::where('type', 'Penerimaan')
            ->where('is_active', true)
            ->count();

        $activeExpense = Category::where('type', 'Pengeluaran')
            ->where('is_active', true)
            ->count();

        $inactiveCategories = Category::where('is_active', false)
            ->count();

        return view('categories.index', compact(
            'categories',
            'totalCategories',
            'activeIncome',
            'activeExpense',
            'inactiveCategories'
        ));
    }

    public function create(): View
    {
        return view('categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'type' => ['required', 'in:Penerimaan,Pengeluaran'],
            'name' => ['required', 'string', 'max:255'],
            'is_active' => ['required', 'boolean'],
        ], [
            'type.required' => 'Jenis kategori wajib dipilih.',
            'type.in' => 'Jenis kategori tidak valid.',
            'name.required' => 'Nama kategori wajib diisi.',
            'name.max' => 'Nama kategori maksimal 255 karakter.',
            'is_active.required' => 'Status kategori wajib dipilih.',
            'is_active.boolean' => 'Status kategori tidak valid.',
        ]);

        Category::create($validated);

        return redirect()
            ->route('categories.index')
            ->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit(Category $category): View
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category): RedirectResponse
    {
        $validated = $request->validate([
            'type' => ['required', 'in:Penerimaan,Pengeluaran'],
            'name' => ['required', 'string', 'max:255'],
            'is_active' => ['required', 'boolean'],
        ], [
            'type.required' => 'Jenis kategori wajib dipilih.',
            'type.in' => 'Jenis kategori tidak valid.',
            'name.required' => 'Nama kategori wajib diisi.',
            'name.max' => 'Nama kategori maksimal 255 karakter.',
            'is_active.required' => 'Status kategori wajib dipilih.',
            'is_active.boolean' => 'Status kategori tidak valid.',
        ]);

        $category->update($validated);

        return redirect()
            ->route('categories.index')
            ->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();

        return redirect()
            ->route('categories.index')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}
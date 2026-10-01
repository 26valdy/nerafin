@csrf

<div class="field">
    <label for="type">
        Jenis *
    </label>

    <select name="type" id="type" class="input">
        <option value="">
            Pilih jenis
        </option>

        <option
            value="Penerimaan"
            @selected(old('type', $category->type ?? '') === 'Penerimaan')
        >
            Penerimaan
        </option>

        <option
            value="Pengeluaran"
            @selected(old('type', $category->type ?? '') === 'Pengeluaran')
        >
            Pengeluaran
        </option>
    </select>

    @error('type')
        <div class="error">
            {{ $message }}
        </div>
    @enderror
</div>


<div class="field">
    <label for="name">
        Nama Kategori *
    </label>

    <input
        type="text"
        name="name"
        id="name"
        class="input"
        value="{{ old('name', $category->name ?? '') }}"
        placeholder="Contoh: Biaya Sertifikasi"
        maxlength="255"
    >

    @error('name')
        <div class="error">
            {{ $message }}
        </div>
    @enderror
</div>


<div class="field">

    <label for="is_active">
        Status *
    </label>

    <select name="is_active" id="is_active" class="input">

        <option
            value="1"
            @selected((string) old('is_active', isset($category) ? (int) $category->is_active : 1) === '1')
        >
            Aktif
        </option>

        <option
            value="0"
            @selected((string) old('is_active', isset($category) ? (int) $category->is_active : 1) === '0')
        >
            Nonaktif
        </option>

    </select>

    @error('is_active')
        <div class="error">
            {{ $message }}
        </div>
    @enderror

</div>
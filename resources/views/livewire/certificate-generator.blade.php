<div class="bg-white p-5 rounded-lg shadow w-full max-w-lg">

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-date">
                Date du procès verbal
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('form.date') border-red-500 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                id="grid-date" wire:model="form.date" type="date">
            @error('form.date')
            <p class="text-red-500 mt-2 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Prénom
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('form.firstname') border-red-500 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                id="grid-first-name" wire:model="form.firstname" type="text" placeholder="Prénom">
            @error('form.firstname')
            <p class="text-red-500 mt-2 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Nom
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('form.lastname') border-red-500 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                id="grid-last-name" wire:model="form.lastname" type="text" placeholder="Nom">
            @error('form.lastname')
            <p class="text-red-500 mt-2 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-birthdate">
                Date de naissance
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('form.birthdate') border-red-500 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                id="grid-form.birthdate" wire:model="form.birthdate" type="date">
            @error('form.birthdate')
            <p class="text-red-500 mt-2 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                Ville de naissance
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('form.city') border-red-500 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                id="grid-form.city" wire:model="form.city" type="text" placeholder="Ville de naissance">
            @error('form.city')
            <p class="text-red-500 mt-2 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-code">
                Numéro de diplôme
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('form.code') border-red-500 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                id="grid-form.code" wire:model="form.code" type="text" placeholder="Numéro du diplôme (ex: PSC1-2AF030FCOR 2024/05-65)">
            @error('form.code')
            <p class="text-red-500 mt-2 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click="generate">
        Générer le diplôme
    </button>
</div>

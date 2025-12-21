<x-layout :user="request()->user()" title="Εταιρείες - Firesafe" heading="Εταιρείες">

<!-- <hr class="mb-5 border-t border-gray-300"> -->



<div class="overflow-x-auto mb-5 mt-5">
  <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
    
    <!-- Table Header -->
    <thead class="bg-gray-100">
      <tr>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
          ID
        </th>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
            ΕΡΓΑΣΙΕΣ
        </th>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
          ΟΝΟΜΑ
        </th>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
          ΣΧΟΛΙΑ
        </th>
      </tr>
    </thead>

    <!-- Table Body -->
    <tbody class="divide-y divide-gray-200">

        @foreach ($companies as $company)
            <tr
                class="hover:bg-gray-100 transition cursor-pointer"
                role="link"
                tabindex="0"
                onclick="window.location='{{ url('/companies/'. $company->id . '') }}'"
                onkeydown="if(event.key==='Enter'){ window.location='{{ url('/') }}' }"
            >
                    <td class="px-4 py-3 text-sm text-gray-800">
                    {{ $company->id }}
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-600">
                    {{ $company->countJobs() }}
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-600">
                    {{ $company->name }}
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-600">
                    {{ $company->comments }}
                    </td>
            </tr>
        @endforeach


    </tbody>

  </table>
</div>


<hr class="mb-5 border-t border-gray-300">

<a href="/companies/create" class="hover:bg-gray-900 rounded-md bg-gray-800 px-3 py-2 font-medium text-white">Νέα Εταιρεία</a>

</x-layout>

<x-layout :user="request()->user()" title="Companies - Firesafe" heading="Companies">

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
            Jobs
        </th>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
          Company Name
        </th>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
          Comments
        </th>
      </tr>
    </thead>

    <!-- Table Body -->
    <tbody class="divide-y divide-gray-200">

        @foreach ($companies as $company)
            <tr class="hover:bg-gray-50">
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

<a href="/companies/create" class="hover:bg-gray-900 rounded-md bg-gray-800 px-3 py-2 font-medium text-white">Create Company</a>

</x-layout>

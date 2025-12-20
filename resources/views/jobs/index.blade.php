<x-layout :user="request()->user()" title="Jobs - Firesafe" heading="Jobs">


    <div class="overflow-x-auto mb-5 mt-5">
  <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
    
    <!-- Table Header -->
    <thead class="bg-gray-100">
      <tr>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
          ID
        </th>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
          Location
        </th>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
            Company Name
        </th>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
            Period
        </th>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
          FE [6kg // 12kg]
        </th>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
          Contact Information
        </th>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
          Comments
        </th>
      </tr>
    </thead>

    <!-- Table Body -->
    <tbody class="divide-y divide-gray-200">

        @foreach ($fejobs as $job)
            <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 text-sm text-gray-800">
                    {{ $job->id }}
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-800">
                    {{ $job->location }}
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-600">
                    {{ $job->company->name }}
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-600">
                    {{ $job->period }}
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-600">
                        @if ($job->fe6) {{ $job->fe6 }}x6kg @endif  
                        @if ($job->fe12) / {{ $job->fe12 }}x12kg @endif 
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-600">
                    {{ $job->contact_information }}
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-600">
                    {{ $job->comments }}
                    </td>
            </tr>
        @endforeach


    </tbody>

  </table>
</div>




    <hr class="mb-5 border-t border-gray-300">

<a href="/jobs/create" class="hover:bg-gray-900 rounded-md bg-gray-800 px-3 py-2 font-medium text-white">Create Job</a>

</x-layout>
<x-layout :user="request()->user()" title="Αρχική - Firesafe" heading="Επισκόπηση Μήνα">

    

<a href="/jobs/create" class="hover:bg-gray-900 rounded-md bg-gray-800 px-3 py-2 font-medium text-white">Νέα Εργασία</a>
<hr class="mb-5 mt-5 border-t border-gray-300">


    <div class="overflow-x-auto mb-5 mt-5">
  <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
    
    <!-- Table Header -->
    <thead class="bg-gray-100">
      <tr>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
          ID
        </th>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
          ΤΟΠΟΘΕΣΙΑ
        </th>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
            ΕΤΑΙΡΕΙΑ
        </th>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
            ΜΗΝΑΣ
        </th>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
          ΠΥΡΟΣΒΕΣΤΗΡΕΣ
        </th>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
          ΕΠΙΚΟΙΝΩΝΙΑ
        </th>
        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">
          ΣΧΟΛΙΑ
        </th>
      </tr>
    </thead>

    <!-- Table Body -->
    <tbody class="divide-y divide-gray-200">
        @foreach ($fejobs as $job)
            <tr
                class="hover:bg-gray-100 transition cursor-pointer"
                role="link"
                tabindex="0"
                onclick="window.location='{{ url('/jobs/'. $job->id . '') }}'"
                onkeydown="if(event.key==='Enter'){ window.location='{{ url('/') }}' }"
            >
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






</x-layout>

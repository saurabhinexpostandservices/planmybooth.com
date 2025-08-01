 <div class="relative bg-fixed bg-[#176B87]/70  mt-[-80px] min-h-screen p-10">
     <div class="max-w-6xl mx-auto p-10 font-poppins bg-white rounded-lg shadow-lg my-20 md:my-28">
         <h2 class="text-2xl font-semibold text-gray-700 mb-6">Your request history</h2>

         <table class="min-w-full bg-white shadow rounded-lg">
             <thead class="hidden md:table-header-group">
                 <tr class="border-b">
                     <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Ref.</th>
                     <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Type</th>
                     <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Trade Show</th>
                     <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">City</th>
                     <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Year</th>
                     <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Supplier</th>
                 </tr>
             </thead>
             <tbody>
                @foreach ($leads as $lead)
                    <tr class="block md:table-row hover:bg-gray-50 border-b md:border-0">
                        <td class="block md:table-cell px-6 py-4 text-[#0087B8] hover:text-[#006b91] hover:underline cursor-pointer"
                            data-label="Ref.">
                            <span class="md:hidden font-semibold text-gray-600">Ref.: </span>
                            <a href="#">PMB101{{ $lead->id ?? '-' }}</a>
                        </td>
                        <td class="block md:table-cell px-6 py-4 text-gray-700" data-label="Type">
                            <span class="md:hidden font-semibold text-gray-600">Type: </span>
                            {{ $lead->services ?? '-' }}
                        </td>
                        <td class="block md:table-cell px-6 py-4 text-gray-700" data-label="Trade Show">
                            <span class="md:hidden font-semibold text-gray-600">Trade Show: </span>
                            {{ $lead->show->title ?? '-' }}
                        </td>
                        <td class="block md:table-cell px-6 py-4 text-gray-700" data-label="City">
                            <span class="md:hidden font-semibold text-gray-600">City: </span>
                            {{ $lead->city->name ?? '-' }}
                        </td>
                        <td class="block md:table-cell px-6 py-4 text-gray-700" data-label="Year">
                            <span class="md:hidden font-semibold text-gray-600">Date: </span>
                            {{ $lead->created_at ? $lead->created_at->format('d M, Y') : '-' }}
                        </td>
                        <td class="block md:table-cell px-6 py-4 text-[#0087B8] hover:text-[#006b91] hover:underline cursor-pointer"
                            data-label="Supplier">
                            <span class="md:hidden font-semibold text-gray-600">Supplier: </span>
                            <a href="#">
                                {{ $lead->supplier_status ?? 'Incomplete request' }}
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

         </table>
     </div>
 </div>

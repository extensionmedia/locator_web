<tr class="border-b hover:bg-gray-100" style="transition: all .3s">
    <td class="py-1" style="min-width: 60px">
        {{ $mouvement->account_mouvement_date }}
    </td>
    <td>
        {{ $mouvement->description }} 
    </td>
    <td class="w-28">
        {{ $mouvement->category->finance_account_mouvement_category }} 
    </td>
    <td class="w-28 text-left">
        {{ $mouvement->type->payment_type }} 
    </td>
    <td class="w-28 text-left">
        {{ $mouvement->account->finance_account_name }} 
    </td>
    @if ($mouvement->account_mouvement_in == 0)
        <td class="w-24 text-right text-xs bg-red-100 text-red-600 pr-2"> 
           - @money($mouvement->account_mouvement_out)
    @else
        <td class="w-24 text-right text-xs bg-green-100 text-green-600 pr-2"> 
           + @money($mouvement->account_mouvement_in)
    @endif
    </td>
    <td class="w-14 text-center">
        <form class="m-0" method="POST" action="{{ route('mouvement.edit', ['depense'=>$mouvement->id]) }}">
            @csrf()
            <button type="submit" class="btn"><i class="fas fa-ellipsis-h"></i></button>
        </form>
    </td>
</tr>
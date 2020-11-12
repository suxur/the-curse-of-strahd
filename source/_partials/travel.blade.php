<table class="tabel-auto">
    <tbody>
    <tr>
        <td class="border px-4 py-2">Fast</td>
        <td class="border px-4 py-2">{{ floor($miles / 4) }} hour {{ round((($miles / 4) - floor($miles / 4)) * 60) }} minutes</td>
    </tr>
    <tr>
        <td class="border px-4 py-2">Normal</td>
        <td class="border px-4 py-2">{{ floor($miles / 3) }} hour {{ round((($miles / 3) - floor($miles / 3)) * 60) }} minutes</td>
    </tr>
    <tr>
        <td class="border px-4 py-2">Slow</td>
        <td class="border px-4 py-2">{{ floor($miles / 2) }} hour {{ round((($miles / 2) - floor($miles / 2)) * 60) }} minutes</td>
    </tr>
    </tbody>
</table>
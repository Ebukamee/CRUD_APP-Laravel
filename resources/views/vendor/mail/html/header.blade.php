@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'HealthRadar')
<img src="https://firebasestorage.googleapis.com/v0/b/giftcard-9951a.appspot.com/o/products%2Flogo.png?alt=media&token=6e972c98-dffb-4520-ac9d-6546dcf1d521" alt="Health Radar Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>

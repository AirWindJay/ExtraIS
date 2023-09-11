    <table style="width: 100%">
        <tbody>
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[0]->done == 'N')
                        <input name="checkcount[0]"  id="checkcount[0]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[0]"  id="checkcount[0]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[0]->cclDesc}}
                </td>
                {{-- <td rowspan="49" align="center">
                    <textarea name="" id="" cols="60" rows="50" style="text-align: center; font-size: 9px"></textarea>
                </td> --}}
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[1]->done == 'N')
                        <input name="checkcount[1]"  id="checkcount[1]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[1]"  id="checkcount[1]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[1]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[2]->done == 'N')
                        <input name="checkcount[2]"  id="checkcount[2]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[2]"  id="checkcount[2]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[2]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[3]->done == 'N')
                        <input name="checkcount[3]"  id="checkcount[3]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[3]"  id="checkcount[3]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[3]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[4]->done == 'N')
                        <input name="checkcount[4]"  id="checkcount[4]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[4]"  id="checkcount[4]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[4]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[5]->done == 'N')
                        <input name="checkcount[5]"  id="checkcount[5]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[5]"  id="checkcount[5]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[5]->cclDesc}}
                </td>
            </tr>
        </tbody>
            {{-- 
                SEPARATOR
                --}}
        <tbody class="labels">
            <tr >
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[6]->done == 'N')
                        <input name="checkcount1"  id="checkcount1"  value="1" type="checkbox" onclick="firstcollapse()">
                    @else
                        <input checked name="checkcount1"  id="checkcount1"  value="1" type="checkbox" onclick="firstcollapse()">
                    @endif
                </td>
                <td colspan="4">
                    <b>{{$checklist[6]->cclDesc}}</b>
                </td>
            </tr>
        </tbody>
            {{-- 
                SEPARATOR
                --}}
    
        <tbody id="firstcollapse" style="display: ">
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[7]->done == 'N')
                        <input name="checkcount[7]"  id="checkcount[7]"  value="1" type="checkbox" >
                    @else
                        <input checked name="checkcount[7]"  id="checkcount[7]"  value="1" type="checkbox" >
                    @endif
                </td>
                <td>
                    {{$checklist[7]->cclDesc}}
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[9]->done == 'N')
                        <input name="checkcount[9]"  id="checkcount[9]"  value="1" type="checkbox" >
                    @else
                        <input checked name="checkcount[9]"  id="checkcount[9]"  value="1" type="checkbox" >
                    @endif
                </td>
                <td>
                    {{$checklist[9]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[8]->done == 'N')
                        <input name="checkcount[8]"  id="checkcount[8]"  value="1" type="checkbox" >
                    @else
                        <input checked name="checkcount[8]"  id="checkcount[8]"  value="1" type="checkbox" >
                    @endif
                </td>
                <td>
                    {{$checklist[8]->cclDesc}}
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[10]->done == 'N')
                        <input name="checkcount[10]"  id="checkcount[10]"  value="1" type="checkbox" >
                    @else
                        <input checked name="checkcount[10]"  id="checkcount[10]"  value="1" type="checkbox" >
                    @endif
                </td>
                <td>
                    {{$checklist[10]->cclDesc}}
                </td>
            </tr>
        </tbody>
            {{-- 
                SEPARATOR
                --}}
        <tbody class="labels">
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[11]->done == 'N')
                        <input name="checkcount[11]"  id="checkcount[11]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[11]"  id="checkcount[11]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[11]->cclDesc}}
                </td>
            </tr>
        </tbody>
            {{-- 
                SEPARATOR
                --}}
    
        <tbody class="labels">
            <tr>
                <td style="width: 20%" align="right">
                    <input type="text" id="cclCode2" name="cclCode2" value="{{$checklist[12]->cclCode}}" hidden>
                    @if ($checklist[12]->done == 'N')
                        <input name="checkcount2" id="checkcount2"  value="1" type="checkbox"  onclick="secondcollapse()">
                    @else
                        <input checked name="checkcount2" id="checkcount2"  value="1" type="checkbox"  onclick="secondcollapse()">
                    @endif
                </td>
                <td colspan="4">
                    <b>{{$checklist[12]->cclDesc}}</b>
                </td>
            </tr>
        </tbody>
    
            {{-- 
                SEPARATOR
                --}}
    
        
        <tbody id="secondcollapse" style="display: ">  
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[13]->done == 'N')
                        <input name="checkcount[13]"  id="checkcount[13]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[13]"  id="checkcount[13]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="3">
                    {{$checklist[13]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[14]->done == 'N')
                        <input name="checkcount[14]"  id="checkcount[14]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[14]"  id="checkcount[14]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="3">
                    {{$checklist[14]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[15]->done == 'N')
                        <input name="checkcount[15]"  id="checkcount[15]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[15]"  id="checkcount[15]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="3">
                    {{$checklist[15]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[16]->done == 'N')
                        <input name="checkcount[16]"  id="checkcount[16]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[16]"  id="checkcount[16]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="3">
                    {{$checklist[16]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[17]->done == 'N')
                        <input name="checkcount[17]"  id="checkcount[17]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[17]"  id="checkcount[17]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="3">
                    {{$checklist[17]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[18]->done == 'N')
                        <input name="checkcount[18]"  id="checkcount[18]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[18]"  id="checkcount[18]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="3">
                    {{$checklist[18]->cclDesc}}
                </td>
            </tr>
        </tbody>
            {{-- 
                SEPARATOR
                --}}
        <tbody>
            <tr>
                <td style="width: 20%" align="right">

                    @if ($checklist[19]->done == 'N')
                        <input name="checkcount3" id="checkcount3"  value="1" type="checkbox"  onclick="thirdcollapse()">
                    @else
                        <input checked name="checkcount3" id="checkcount3"  value="1" type="checkbox"  onclick="thirdcollapse()">
                    @endif
                </td>
                <td colspan="4">
                    <b>{{$checklist[19]->cclDesc}}</b>
                </td>
            </tr>
        </tbody>
            {{-- 
                SEPARATOR
                --}}
        <tbody id="thirdcollapse" style="display:">
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[20]->done == 'N')
                        <input name="checkcount[20]"  id="checkcount[20]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[20]"  id="checkcount[20]"  value="1" type="checkbox">
                    @endif
                </td>
                <td>
                    {{$checklist[20]->cclDesc}}
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[21]->done == 'N')
                        <input name="checkcount[21]"  id="checkcount[21]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[21]"  id="checkcount[21]"  value="1" type="checkbox">
                    @endif
                </td>
                <td>
                    {{$checklist[21]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[22]->done == 'N')
                        <input name="checkcount[22]"  id="checkcount[22]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[22]"  id="checkcount[22]"  value="1" type="checkbox">
                    @endif
                </td>
                <td>
                    {{$checklist[22]->cclDesc}}
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[23]->done == 'N')
                        <input name="checkcount[23]"  id="checkcount[23]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[23]"  id="checkcount[23]"  value="1" type="checkbox">
                    @endif
                </td>
                <td>
                    {{$checklist[23]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[24]->done == 'N')
                        <input name="checkcount[24]"  id="checkcount[24]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[24]"  id="checkcount[24]"  value="1" type="checkbox">
                    @endif
                </td>
                <td>
                    {{$checklist[24]->cclDesc}}
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[25]->done == 'N')
                        <input name="checkcount[25]"  id="checkcount[25]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[25]"  id="checkcount[25]"  value="1" type="checkbox">
                    @endif
                </td>
                <td>
                    {{$checklist[25]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[26]->done == 'N')
                        <input name="checkcount[26]"  id="checkcount[26]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[26]"  id="checkcount[26]"  value="1" type="checkbox">
                    @endif
                </td>
                <td>
                    {{$checklist[26]->cclDesc}}
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[27]->done == 'N')
                        <input name="checkcount[27]"  id="checkcount[27]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[27]"  id="checkcount[27]"  value="1" type="checkbox">
                    @endif
                </td>
                <td>
                    {{$checklist[27]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[28]->done == 'N')
                        <input name="checkcount[28]"  id="checkcount[28]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[28]"  id="checkcount[28]"  value="1" type="checkbox">
                    @endif
                </td>
                <td>
                    {{$checklist[28]->cclDesc}}
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[29]->done == 'N')
                        <input name="checkcount[29]"  id="checkcount[29]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[29]"  id="checkcount[29]"  value="1" type="checkbox">
                    @endif
                </td>
                <td>
                    {{$checklist[29]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[30]->done == 'N')
                        <input name="checkcount[30]"  id="checkcount[30]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[30]"  id="checkcount[30]"  value="1" type="checkbox">
                    @endif
                </td>
                <td>
                    {{$checklist[30]->cclDesc}}
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[31]->done == 'N')
                        <input name="checkcount[31]"  id="checkcount[31]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[31]"  id="checkcount[31]"  value="1" type="checkbox">
                    @endif
                </td>
                <td>
                    {{$checklist[31]->cclDesc}}
                </td>
            </tr>
        </tbody>
            {{-- 
                SEPARATOR
                --}}
        <tbody>
            <tr>
                <td style="width: 20%" align="right">
                    <input type="text" id="cclCode4" name="cclCode4" value="{{$checklist[32]->cclCode}}" hidden>
                    @if ($checklist[32]->done == 'N')
                        <input name="checkcount4" id="checkcount4"  value="1" type="checkbox"  onclick="fourthcollapse()">
                    @else
                        <input checked name="checkcount4" id="checkcount4"  value="1" type="checkbox"  onclick="fourthcollapse()">
                    @endif
                </td>
                <td colspan="4">
                    <b>{{$checklist[32]->cclDesc}}</b>
                </td>
            </tr>
        </tbody>
            {{-- 
                SEPARATOR
                --}}
        <tbody id="fourthcollapse" style="display:">
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[33]->done == 'N')
                        <input name="checkcount[33]"  id="checkcount[33]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[33]"  id="checkcount[33]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="3">
                    {{$checklist[33]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[34]->done == 'N')
                        <input name="checkcount[34]"  id="checkcount[34]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[34]"  id="checkcount[34]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="3">
                    {{$checklist[34]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[35]->done == 'N')
                        <input name="checkcount[35]"  id="checkcount[35]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[35]"  id="checkcount[35]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="3">
                    {{$checklist[35]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[36]->done == 'N')
                        <input name="checkcount[36]"  id="checkcount[36]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[36]"  id="checkcount[36]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="3">
                    {{$checklist[36]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
                    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[37]->done == 'N')
                        <input name="checkcount[37]"  id="checkcount[37]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[37]"  id="checkcount[37]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="3">
                    {{$checklist[37]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[38]->done == 'N')
                        <input name="checkcount[38]"  id="checkcount[38]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[38]"  id="checkcount[38]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="3">
                    {{$checklist[38]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[39]->done == 'N')
                        <input name="checkcount[39]"  id="checkcount[39]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[39]"  id="checkcount[39]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="3">
                    {{$checklist[39]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[40]->done == 'N')
                        <input name="checkcount[40]"  id="checkcount[40]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[40]"  id="checkcount[40]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="3">
                    {{$checklist[40]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[41]->done == 'N')
                        <input name="checkcount[41]"  id="checkcount[41]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[41]"  id="checkcount[41]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="3">
                    {{$checklist[41]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td>
    
                </td>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[42]->done == 'N')
                        <input name="checkcount[42]"  id="checkcount[42]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[42]"  id="checkcount[42]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="3">
                    {{$checklist[42]->cclDesc}}
                </td>
            </tr>
        </tbody>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[43]->done == 'N')
                        <input name="checkcount[43]"  id="checkcount[43]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[43]"  id="checkcount[43]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[43]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[44]->done == 'N')
                        <input name="checkcount[44]"  id="checkcount[44]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[44]"  id="checkcount[44]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[44]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[45]->done == 'N')
                        <input name="checkcount[45]"  id="checkcount[45]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[45]"  id="checkcount[45]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[45]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[46]->done == 'N')
                        <input name="checkcount[46]"  id="checkcount[46]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[46]"  id="checkcount[46]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[46]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[47]->done == 'N')
                        <input name="checkcount[47]"  id="checkcount[47]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[47]"  id="checkcount[47]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[47]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[48]->done == 'N')
                        <input name="checkcount[48]"  id="checkcount[48]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[48]"  id="checkcount[48]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[48]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[49]->done == 'N')
                        <input name="checkcount[49]"  id="checkcount[49]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[49]"  id="checkcount[49]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[49]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[50]->done == 'N')
                        <input name="checkcount[50]"  id="checkcount[50]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[50]"  id="checkcount[50]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[50]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[51]->done == 'N')
                        <input name="checkcount[51]"  id="checkcount[51]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[51]"  id="checkcount[51]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[51]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[52]->done == 'N')
                        <input name="checkcount[52]"  id="checkcount[52]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[52]"  id="checkcount[52]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[52]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[53]->done == 'N')
                        <input name="checkcount[53]"  id="checkcount[53]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[53]"  id="checkcount[53]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[53]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[54]->done == 'N')
                        <input name="checkcount[54]"  id="checkcount[54]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[54]"  id="checkcount[54]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[54]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[55]->done == 'N')
                        <input name="checkcount[55]"  id="checkcount[55]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[55]"  id="checkcount[55]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[55]->cclDesc}}
                </td>
            </tr>
            {{-- 
                SEPARATOR<>
                --}}
            <tr>
                <td style="width: 20%" align="right">
                    
                    @if ($checklist[56]->done == 'N')
                        <input name="checkcount[56]"  id="checkcount[56]"  value="1" type="checkbox">
                    @else
                        <input checked name="checkcount[56]"  id="checkcount[56]"  value="1" type="checkbox">
                    @endif
                </td>
                <td colspan="4">
                    {{$checklist[56]->cclDesc}}
                </td>
            </tr>
    </table>
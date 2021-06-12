@extends('layout/main_stasi')

@section('title', 'Stasi')

@section('container')

<div class="stasi" align="center">
    <div class="stasi_a">
        <table border="1">
            <h1>Stasi</h1><br>
            <p align="justify">
                Paroki St. Yoseph-Parsoburan dibagi menjadi beberapa rayon.
                Pembagian rayon ini adalah pembagian wilayah yang telah disepakati oleh paroki.
                Berikut Stasi yang ada di Paroki St. Yoseph Parsoburan berdasarkan Rayon.
            </p><br>
            <thead align="center">
                
                    <td>Rayon</td>
                    <td>Stasi</td>
                    <td>Lokasi</td>
                
            </thead>
            <tr>
                <td valign="top">Rayon Matio</td>
                <td>
                    Stasi St. Anna Taon Marisi<br>
                    Stasi St. Clara Matio<br>
                    Stasi St. Gabriel Lumban Ruhap                   
                </td>
                <td valign="top">
                    Tornagodang<br>
                    Matio<br>
                    Lumban Ruhap
                </td>
            </tr>
            <tr>
                <td valign="top">Rayon Batumanumpak</td>
                <td>
                    Stasi St. Pius X Paronggangan<br>
                    Stasi St. Theresia Pandumaan<br>
                    Stasi St. Petrus Batumanumpak<br>
                    Stasi St. Agustinus Nassau          
                </td>
                <td valign="top">
                    Parronggangan<br>
                    Pandumaan<br>
                    Batumanumpak<br>
                    Nassau 
                </td>
            </tr>
            <tr>
                <td valign="top">Rayon Lumban Lintong</td>
                <td>
                    Stasi St.Maria Lumban Lintong<br>
                    Stasi St. Bartolomeus Sibuntuon<br>
                    Stasi St. Benedictus Pararungan<br>
                    Stasi St. Thomas Sijomba<br>      
                    Stasi St. Yoseph Tornaganjang         
                </td>
                <td valign="top">
                    Lumban Lintong<br>
                    Sibuntuon<br>
                    Pararungan<br>
                    Sijomba<br>      
                    Tornaganjang
                </td>
            </tr>
            <tr>
                <td valign="top">Rayon Paridian</td>
                <td>
                    Stasi St. Philipus Janji<br>
                    Stasi St. Fransiskus Laverna<br>
                    Stasi St. Yohannes Pembaptis Napajoring<br>
                    Stasi St. Paulus Lumban Pinasa<br>      
                    Stasi St. Stefanus Paridian                 
                </td>
                <td valign="top">
                    Janji<br>
                    Sibodat<br>
                    Napajoring<br>
                    Lumban Pinasa<br>      
                    Paridian
                </td>
            </tr>
            <tr>
                <td valign="top">Rayon Sijungkat</td>
                <td>
                    Stasi St. Carolus Sijungkat<br>
                    Stasi St. Martha Sibaning<br>
                    Stasi St. Paulus Sipange<br>
                    Stasi St. Maria Simanalese<br>      
                    Stasi St. Maria Sitarak                 
                </td>
                <td valign="top">
                    Sijungkat<br>
                    Sibaning<br>
                    Sipange<br>
                    Simanalese<br>      
                    Sitarak
                </td>
            </tr>
            <tr>
                <td valign="top">Rayon Lumban Rau</td>
                <td>
                    Stasi St. Maria Lumban Rau<br>
                    Stasi St. Vincencius Ambatan Lobuhole<br>
                    Stasi St. Bernardinus Realino Aek Ulok            
                </td>
                <td valign="top">
                    Lumban Rau<br>
                    Ambatan Lobuhole<br>
                    Lumban Ruhap
                </td>
            </tr>
        </table>

        <!-- <h1>Stasi</h1><br>
        <p>
            Paroki St. Yoseph-Parsoburan dibagi menjadi beberapa rayon.
            Pembagian rayon ini adalah pembagian wilayah yang telah disepakati oleh paroki.<br>
            Berikut Stasi yang ada di Paroki St. Yoseph Parsoburan berdasarkan Rayon
        </p><br>
        <ul>
            <h2><li>Rayon Matio</li></h2>
            <ol>
                <li>Stasi St. Anna Taon Marisi</li>
                <li>Stasi St. Clara Matio</li>
                <li>Stasi St. Gabriel Lumban Ruhap</li>
            </ol>
        </ul><br>
        <ul>
            <h2><li>Rayon Batumanumpak</li></h2>
            <ol>
                <li>Stasi St. Pius X Paronggangan</li>
                <li>Stasi St. Theresia Pandumaan</li>
                <li>Stasi St. Petrus Batumanumpak</li>
                <li>Stasi St. Agustinus Nassau</li>
            </ol>
        </ul> <br>
        <ul>
            <h2><li>Rayon Lumban Lintong</li></h2>
            <ol>
                <li>Stasi St. Bartolomeus Sibuntuon</li>
                <li>Stasi St. Clara Matio</li>
                <li>Stasi St. Benedictus Pararungan</li>
                <li>Stasi St. Thomas Sijomba</li>
                <li>Stasi St. Yoseph Tornaganjang</li>
            </ol>
        </ul><br>
        <ul>
            <h2><li>Rayon Paridian</li></h2>
            <ol>
                <li>Stasi St. Philipus Janji</li>
                <li>Stasi St. Fransiskus Laverna</li>
                <li>Stasi St. Yohannes Pembaptis Napajoring</li>
                <li>Stasi St. Paulus Lumban Pinasa</li>
                <li>Stasi St. Stefanus Paridian</li>
            </ol>
        </ul><br>
        <ul>
            <h2><li>Rayon Sijungkat</li></h2>
            <ol>
                <li>Stasi St. Carolus Sijungkat</li>
                <li>Stasi St. Martha Sibaning</li>
                <li>Stasi St. Paulus Sipange</li>
                <li>Stasi St. Maria Simanalese</li>
                <li>Stasi St. Maria Sitarak</li>
            </ol>
        </ul><br>
        <ul>
            <h2><li>Rayon Lumban Rau</li></h2>
            <ol>
                <li>Stasi St. Maria Lumban Rau</li>
                <li>Stasi St. Vincencius Ambatan Lobuhole</li>
                <li>Stasi St. Bernardinus Realino Aek Ulok</li>
                <li>Stasi St. Petrus Borbor</li>
            </ol>
        </ul> -->
    </div>
</div>

@endsection
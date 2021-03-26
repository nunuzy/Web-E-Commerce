<div>
    @php
        $kategori = $data->produk_kategori;
    @endphp

    @if (session()->has('info'))
        <div class="align-center bg-green-500 border-t-1 border-green-600 rounded-b py-3 ">
            <div>
                <h1 class="text-white text-center font-bold">{{ session('info') }}</h1>
            </div>
        </div>
    @endif
    <div class="flex m-7 ml-10 ">
        <img class="w-96 object-cover" src="/storage/img/{{ $data->photo_path }}"><br>
        <div class="bg-white border-t-1 border-gray w-full">
            <h1 class="ml-5 m-5 text-5xl font-bold ">
                {{$data->title}}
            </h1>
            <h1 class="ml-5 m-5 text-lg">
                {{$data->description}}
            </h1>
            <div class="w-80 h=40 mt-5 ml-5">
                <div>
                    <p>
                        @php
                            if( $kategori == '1' OR $kategori == '2'){
                                echo 'Harga Banner Outdoor / m<sup>2</sup> ';
                            }elseif ($kategori == '3') {
                                echo 'Harga HVS 1 play / rim';
                            }elseif ($kategori == '4') {
                                echo 'Stiker Cromo / lembar';
                            }elseif ($kategori == '5') {
                                echo 'Harga 1 rim / muka';
                            }elseif ($kategori == '6') {
                                echo 'Harga Satuan + Stand';
                            }elseif ($kategori == '7') {
                                echo 'Harga 1 muka';
                            }elseif ($kategori == '8') {
                                echo 'Harga / lembar';
                            }elseif ($kategori == '9') {
                                echo 'Harga / lembar';
                            }
                        @endphp
                    </p>
                    Rp{{$data->harga_1}}
                </div>
                <div
                    @php
                        if ($data->harga_2==null){
                            echo('hidden');
                        }
                    @endphp>
                    <p class="mt-3">@php
                        if( $kategori == '1' OR $kategori == '2'){
                            echo 'Harga Design Custom';
                        }elseif ($kategori == '3') {
                            echo 'Harga 2 play / rim';
                        }elseif ($kategori == '4') {
                            echo 'Stiker Vinyl / lembar';
                        }elseif ($kategori == '5') {
                            echo 'Harga 2 rim / muka';
                        }elseif ($kategori == '7') {
                            echo 'Harga 2 muka';
                        }
                    @endphp</p>
                    Rp{{$data->harga_2}}
                </div>

                <div
                    @php
                        if ($data->harga_3==null) {
                        echo ('hidden');
                        }
                    @endphp
                >
                    <p class="mt-3">@php
                        if ($kategori == '3') {
                            echo 'Harga / 1 pon';
                        }elseif ($kategori == '4') {
                            echo 'Stiker Transparan';
                        }

                    @endphp</p>
                    Rp{{$data->harga_3}}
                </div>
                <div
                    @php
                        if ($data->harga_4==null) {
                        echo ('hidden');
                        }
                    @endphp
                >
                    <p class="mt-3">@php
                        if ($kategori == '3') {
                            echo 'harga / nomorator';
                        }
                    @endphp</p>
                    Rp{{$data->harga_4}}
                </div>
            </div>
            <div>
            <div class="py-10 ml-96">
                <button wire:click="openmodal()" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-2 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
                    <div class="w-6 mx-1">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4zMjUgNTEyLjMyNSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtNTEyLjMyNSAyMS40NjgtMjEuMTUzLTIxLjI3NC01Ny44MDIgNTcuNDc1IDIxLjE1MyAyMS4yNzMtNTcuMTAxIDU2Ljc3OGM3LjE4IDE1LjY4IDQuMzIxIDM0Ljg2NS04LjU3OCA0Ny43NDgtOC4wMTYgOC4wMDUtMTguNjY4IDEyLjQxMy0yOS45OTYgMTIuNDEzLTExLjM0OSAwLTIyLjAxNS00LjQyMi0zMC4wMzUtMTIuNDUyLTE2LjU0LTE2LjU2Mi0xNi41MjItNDMuNDkxLjAzOS02MC4wMyA4LjAxNS04LjAwNSAxOC42NjgtMTIuNDEzIDI5Ljk5Ni0xMi40MTMgNi4wMzkgMCAxMS44NzkgMS4yNjQgMTcuMjM1IDMuNjQ1bDU3LjI3OC01Ni45NTUtMTg3LjU3Ni0yMS43MjYtMjQ1Ljc4NSAyNDUuNDY1IDIzMC40MTYgMjMwLjcxNiAyNDUuNzktMjQ1LjQ3LTIxLjY1Ni0xODcuNzQ0em0tMjAzLjEyNCAyNDIuMzgzLTEuNTQyIDQuNzI5LTI3LjgwNS01Ljk0MyAxLjU5Mi01LjY2NmMzLjMyNy0xMS44NDIgMS4yMDUtMTYuODQtMy44NzUtMjEuOTItNC42NDktNC42NDktMTIuNDc5LTQuMzg2LTE3LjQ1Mi41ODgtMy4zNDUgMy4zNDQtNS4xMjcgNi41OC00LjMyMSAxMy4xNjlsLjA2MS4zMjhjLjY3IDMuNjIgMS4yIDYuNDg1IDEuODE5IDguNTk5bDMuOCAxMS45ODljMi45MTMgOC43MzYgNC4zODIgMTMuMzc4IDUuNjQyIDIyLjUwNiAyLjEyNyAxNC41MzUtMS40MTEgMjUuNTk5LTExLjgzMiAzNi45NTNsLS4xNjMuMTcxYy05LjI1IDkuMjUtMjAuMjI2IDE0LjE5Mi0zMi42MjIgMTQuNjg3LTkuMjQ5LjQyNy0xNy44NjUtMS43MDgtMjUuNjU0LTYuMzUzbC0xMy4zNDUgMTMuMzQ1LTE5LjU2My0xOS41NjMgMTMuMjM1LTEzLjIzNWMtMTAuMjU2LTE3LjQ1My05LjQ0NS0zOC44NTkgMi40NDgtNTYuOTI5bDIuMTQ1LTMuMjU5IDI4LjczOCA3LjA2Ny0zLjUyNSA2LjMyNGMtOS45NjIgMTcuODc1LTEwLjI2MSAyOC40MjEtMS4wNjUgMzcuNjE4IDQuODU4IDQuODU4IDkuNzYyIDYuOTE5IDE1LjQyNyA2LjQ4MyA0LjUyNy0uNDY3IDguODE2LTIuNjk4IDEyLjc0Ny02LjYyOSA2LjE4OS02LjE4OSA2LjAwOC0xNC42Ny0uNzEzLTMzLjYxNC00LjY1MS0xMi40LTYuMzA4LTE5LjI3OC03LjA1OS0yOS4zNDUtLjY4NC0xMS42MiAzLjE0LTIxLjEzMiAxMi4wMy0zMC4wMjIgMTMuNDc4LTEzLjQ3OCAzMy4xNzEtMTYuNTU2IDQ5LjI5NC04LjE2NWwxMy4zNjctMTMuMzY3IDE5LjU2MyAxOS41NjMtMTMuNDczIDEzLjQ3M2M1Ljc4MiAxMC43MjYgNi40OTIgMjIuOTUzIDIuMTAxIDM2LjQxOHoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0zNTguODQ5IDE0MC45ODZjLTMuMzIyIDAtNi40NDYgMS4yOTItOC43OTcgMy42NC00Ljg1NiA0Ljg1MS00Ljg2MSAxMi43NDgtLjAxMSAxNy42MDQgMi4zNTIgMi4zNTQgNS40NzkgMy42NTEgOC44MDggMy42NTEgMy4zMjIgMCA2LjQ0Ni0xLjI5MyA4Ljc5Ni0zLjY0IDQuODU2LTQuODUxIDQuODYyLTEyLjc0OC4wMTItMTcuNjA0LTIuMzUyLTIuMzU0LTUuNDgtMy42NTEtOC44MDgtMy42NTF6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjwvc3ZnPg==" />
                    </div>
                     Buy Package
                </button>
            </div>
        </div>
    </div>
    @if ($modalOpen)
        @include('livewire.createpost')
    @endif
</div>

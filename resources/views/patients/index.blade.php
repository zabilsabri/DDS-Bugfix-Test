
<!-- resources/views/patients/index.blade.php -->
@extends('layout.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" x-data="{ open: false }">
            <div class="flex items-center justify-between mb-4">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Patients
                </h2>
                <button @click="open = true"
                    class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 text-white font-medium rounded hover:bg-blue-700 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Add Patient
                </button>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Flash message -->
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <table class="min-w-full divide-y divide-gray-200 text-sm text-left">
                        <thead class="bg-gray-100 text-gray-700 uppercase tracking-wider">
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Gender</th>
                                <th class="px-4 py-2">Birthdate</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach($patients as $p)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">{{ $p->id }}</td>
                                    <td class="px-4 py-2">{{ $p->name }}</td>
                                    <!-- BUG: gender displayed raw numeric -->
                                    <td class="px-4 py-2">{{ $p->gender }}</td>
                                    <!-- BUG: birthdate shown raw string -->
                                    <td class="px-4 py-2">{{ $p->birthdate }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @include('modal.create-patient')
        </div>
    </div>
@endsection

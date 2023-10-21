@extends('layouts.app')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Liste des Administrateurs</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th> User </th>
                            <th> First Name </th>
                            <th> Date de Création </th>
                            <th> Rôle </th>
                          </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                            </td>
                            <td>Jacob</td>
                            <td>12 May 2017</td>
                            <td><label class="badge badge-success">Super Admin</label></td>
                        </tr>
                        <tr>
                            <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                            </td>
                            <td>Messsy</td>
                            <td>15 May 2017</td>
                            <td><label class="badge badge-warning">Administrateur</label></td>
                        </tr>
                        <tr>
                            <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                            </td>
                            <td>John</td>
                            <td>14 May 2017</td>
                            <td><label class="badge badge-warning">Administrateur</label></td>
                        </tr>
                        <tr>
                            <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-4.png" alt="image" />
                            </td>
                            <td>Peter</td>
                            <td>16 May 2017</td>
                            <td><label class="badge badge-warning">Administrateur</label></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
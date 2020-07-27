@extends('layouts.adminmenu')
@section('content')
    <header id="dashboard" class="pt-2 pb-3">
        <div class="container  pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-info">
                        <i class="fa fa-tasks text-dark"></i> Add Permission
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <div id="page-container">
        <div id="content-wrap">
            <section id="add" class="py-4 bg-light">
                <h4 style="padding-left: 15px;">List of Users Role with access to this system</h4>
            </section>
    <table class="blueTable">
        <thead>
        <tr>
        <th>Role</th>
        <th>Page</th>
        <th class="text-center">Create</th>
        <th class="text-center">Read</th>
        <th class="text-center">Update</th>
        <th class="text-center">Delete</th>
        <th class="text-center">Print</th>
        <th class="text-center">Export</th>
        <th class="text-center">Approve</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>Coordinator</td>
        <td>Form</td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="create" data-role="Admin"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="read" data-role="Admin"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="update" data-role="Admin"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="delete" data-role="Admin"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="print" data-role="Admin"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="export" data-role="Admin"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="approve" data-role="Admin"><br></td>
        </tr>
        <tr>
        <td>Student</td>
        <td>Form</td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="create" data-role="Student"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="read" data-role="Student"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="update" data-role="Student"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="delete" data-role="Student"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="print" data-role="Student"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="export" data-role="Student"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="approve" data-role="Student"><br></td>
        </tr>
        <tr>
        <td>Supervisor</td>
        <td>Form</td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="create" data-role="Supervisor"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="read" data-role="Supervisor"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="update" data-role="Supervisor"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="delete" data-role="Supervisor"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="print" data-role="Supervisor"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="export" data-role="Supervisor"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="approve" data-role="Supervisor"><br></td>
        </tr>
        <tr>
        <td>Challenge Owner</td>
        <td>Form</td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="create" data-role="Challenge Owner"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="read" data-role="Challenge Owner"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="update" data-role="Challenge Owner"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="delete" data-role="Challenge Owner"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="print" data-role="Challenge Owner"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="export" data-role="Challenge Owner"><br></td>
        <td class="text-center"><input type="checkbox" class="role-permission" data-page="form" data-key="approve" data-role="Challenge Owner"><br></td>
        </tr>
        </tbody>
    </table>
       @endsection

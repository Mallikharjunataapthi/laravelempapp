import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { EmployeeListComponent } from './components/Employee-list/Employee-list.component';
import { EmployeeDetailsComponent } from './components/Employee-details/Employee-details.component';
import { AddEmployeeComponent } from './components/add-Employee/add-Employee.component';

const routes: Routes = [

{ path: '', redirectTo: 'employees', pathMatch: 'full' },
  { path: 'employees', component: EmployeeListComponent },
  { path: 'employees/:id', component: EmployeeDetailsComponent },
  { path: 'employees/add', component: AddEmployeeComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

import { Component } from '@angular/core';
import { Router } from '@angular/router';


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'tienda_angular';

  busqueda= "";

  constructor(private router:Router){

  }

  //cuando el componente arranque la primera vez navegar por defecto a listado

  ngOnInit():void{
   this.router.navigate(["listado"]);
  }


  


}

import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { Observable } from 'rxjs';
import { MiServicioService } from '../mi-servicio.service';
import { Zapatilla } from '../models/zapatilla';


@Component({
  selector: 'app-listado',
  templateUrl: './listado.component.html',
  styleUrls: ['./listado.component.css']
})
export class ListadoComponent {
  descuento = "";
  zapatilla:Zapatilla[]={} as Zapatilla[];

  busqueda= "";

  constructor(private miServicio:MiServicioService, private router:Router){

  }

  ngOnInit():void{
    this.miServicio.obtenerZapatillas().subscribe(res => this.zapatilla = res);
  }

  verDetalles(z:Zapatilla):void{
    this.router.navigate(["detalles",z.id]);
  }
  




  
}

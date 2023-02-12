import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Pedido } from './models/pedido';
import { Zapatilla } from './models/zapatilla';
import { ZapatillaCarrito } from './models/zapatillaCarrito';
import { ZapatillaFavorito } from './models/zapatillaFavorito';

@Injectable({
  providedIn: 'root'
})
export class MiServicioService {

  ruta_server="/server/";

  constructor(private http:HttpClient) { }

  obtenerZapatillas():Observable<Zapatilla[]>{
    return this.http.get<Zapatilla[]>(this.ruta_server +"obtenerZapatillas.php");
  }

  obtenerZapatillaPorId(id:number):Observable<Zapatilla>{
    return this.http.get<Zapatilla>(this.ruta_server+"obtenerZapatillaPorId.php?id="+id);
  }
  agregarAlCarrito(idZapatilla:number, cantidad: number):Observable<any>{
    return this.http.post<any>(this.ruta_server+"agregarProductoCarrito.php",
      {
        "id": idZapatilla,
        "cantidad": cantidad
      }
    );
  }

  obtenerZapatillasCarrito():Observable<ZapatillaCarrito[]>{
    return this.http.get<ZapatillaCarrito[]>(this.ruta_server+"obtenerZapatillasCarrito.php");
  }

  vaciarCarrito():Observable<string>{
    return this.http.delete<string>(this.ruta_server+"vaciarCarrito.php");
  }

  registrarPedido(p:Pedido):Observable<string>{
    return this.http.post<string>(this.ruta_server+"registrarPedido.php",p);
  }

  /* Favorito */
  agregarAFavoritos(idZapatilla:number):Observable<any>{
    return this.http.post<any>(this.ruta_server+"agregarProductoFavorito.php",
      {
        "id": idZapatilla
      }
    );
  }

  obtenerZapatillasFavoritos():Observable<ZapatillaFavorito[]>{
    return this.http.get<ZapatillaFavorito[]>(this.ruta_server+"obtenerZapatillasFavorito.php");
  }

  vaciarFavoritos():Observable<string>{
    return this.http.delete<string>(this.ruta_server+"vaciarFavorito.php");
  }






}

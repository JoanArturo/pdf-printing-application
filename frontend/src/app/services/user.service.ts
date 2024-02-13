import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class UserService {

  private readonly API: string = 'http://127.0.0.1:8000/api';

  constructor(private http: HttpClient) { }

  downloadUserPDF(): Observable<any> {
    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });
    return this.http.get(`${this.API}/create-user-pdf`, {
      headers,
      responseType: 'blob'
    });
  }
}

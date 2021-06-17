<x-app-layout>
    <x-slot name="header">
        Deneme Sınavı
    </x-slot>

   <div class="card">
       <div class="card-body">
           <h5 class="card-title">
               <a href="#" class="btn btn-sm btn-primary "><i class="fas fa-plus"></i> Deneme Oluştur</a>
           </h5>
           <table class="table table-bordered">
               <thead>
               <tr>
                   <th scope="col">İd</th>
                   <th scope="col">Deneme</th>
                   <th scope="col">Durum</th>
                   <th scope="col">Bitiş Tarihi</th>
                   <th scope="col">İşlemler</th>
               </tr>
               </thead>
               <tbody>
               @foreach($exams as $exam)
               <tr>
                   <th>{{$exam->id}}</th>
                   <td>{{$exam->title}}</td>
                   <td>{{$exam->status}}</td>
                   <td>{{$exam->finished_at}}</td>
                   <td>
                       <a href="#" class="btn btn-sm btn-primary "><i class="fas fa-edit"></i></a>
                       <a href="#" class="btn btn-sm btn-danger "><i class="fas fa-trash"></i></a>
                   </td>
               </tr>
               @endforeach
               </tbody>

           </table>
           {{$exams->links()}}
       </div>
   </div>
</x-app-layout>

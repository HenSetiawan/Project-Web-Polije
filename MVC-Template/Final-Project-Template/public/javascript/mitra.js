const btnDelKosItems=document.querySelectorAll('.btn-delete-kos');
if(btnDelKosItems!=null){
    btnDelKosItems.forEach(btnDel=>{
        btnDel.addEventListener('click',async ()=>{
            const url=btnDel.dataset.url;
            const idKos=btnDel.dataset.id;
            const isAlert=await swal("Apakah anda ingin menghapus data ini?", {
                buttons: ["Tidak", "Iya"]
              });



              if(isAlert){
                location.replace(`${url}/${idKos}`);
              }
        })
    })
}
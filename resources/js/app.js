import './bootstrap'
import 'bootstrap/dist/js/bootstrap.bundle.min.js'

import $ from 'jquery'
window.$ = window.jQuery = $

import select2 from 'select2'
select2($)

import 'datatables.net-bs5'
import 'datatables.net-buttons-bs5'
import 'datatables.net-buttons/js/buttons.html5'
import 'datatables.net-buttons/js/buttons.print'

import JSZip from 'jszip'
window.JSZip = JSZip

import Swal from 'sweetalert2'
window.Swal = Swal

document.addEventListener("DOMContentLoaded",function(){
    document.querySelectorAll(".password-toggle").forEach(toggle=>{
        toggle.addEventListener("click",function(){
            const input = this.previousElementSibling
            const type = input.type === "password" ? "text" : "password"
            input.type = type
            this.classList.toggle("bi-eye")
            this.classList.toggle("bi-eye-slash")
        })
    })
})

$(function(){

    $('.select2').each(function(){

        let ajaxUrl = $(this).data('ajax')

        if(ajaxUrl){

            $(this).select2({
                theme:'bootstrap-5',
                width:'100%',
                placeholder:'Select option',
                allowClear:true,
                ajax:{
                    url:ajaxUrl,
                    dataType:'json',
                    delay:250,
                    data:function(params){
                        return {
                            search: params.term
                        }
                    },
                    processResults:function(data){
                        return {
                            results:data
                        }
                    }
                }
            })

        }else{

            $(this).select2({
                theme:'bootstrap-5',
                width:'100%',
                placeholder:'Select option'
            })

        }

    })

})
document.addEventListener('DOMContentLoaded', function(){
    const currentUrl = window.location.href;
    document.querySelectorAll('.sidebar-sublink').forEach(link => {
        if(currentUrl.includes(link.getAttribute('href'))){
            link.classList.add('active');
            const collapse = link.closest('.collapse');
            if(collapse){
                collapse.classList.add('show');
            }
            const parentLink = collapse?.previousElementSibling;
            if(parentLink){
                parentLink.classList.remove('collapsed');
                parentLink.classList.add('active');
            }

        }

    });

});

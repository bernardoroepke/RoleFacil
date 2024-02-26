@extends('layout')
@section('content')   
<x-breadcrumb title="Freelancer" /> 
        <div class="text-center">
          <h2 class="fw-medium fs-1">Lista de Freelances</h2>
          <h3>Encontre aqui uma oportunidade de Freelance que se encaixe com seu perfil!</h3>
        </div>

        {{-- container de filtros --}}
        <div class="container">
          <div class="row">
            
            {{-- filtro1 --}}
            <div class="col-md-2 mt-5 h-25  text-white filtro">
              <div class="form-check form-check-inline">
                <div class="title fw-semibold fs-2">Filtro</div>
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Distância</label>
              </div>
              
              {{-- filtro2 --}}
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">Valor</label>
              </div>

              {{-- select cidades --}}
              <div class="select-city">

              
              <label class="fs-3">Localização:</label>
              <form action="#">
                <p>
                <Label for="estado">Estado</Label>
                <select name="estado" id="estado">
                    <option value="">Selecione</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                </select>
                </p>
                
            </form>
        
            <label for="cidade">Cidade</label>
            <select name="cidade" id="cidade">
            <option value="">Selecione</option>
            </select>
          </div>
        


            </div>

            {{-- display de lista --}}
            <div class="col-md-8 freelancebox">
              <x-freelanceList aboutWhat="Zona"/>
              <x-freelanceList aboutWhat="Pirokada no Daniel"/>
              <x-freelanceList aboutWhat="Pub"/>
            </div>

          </div>
        </div>

        <script>
          //selecionar o elemento para manipular o evento change
const selEstados = document.querySelector('#estado');

//adicionando o evento change ao select
selEstados.addEventListener("change", function(){
    let selecionado = this.value

    let estrutura = '<option value="">Selecione</option>'
    //consultar a api

    fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${selecionado}/municipios`)
        .then(retorno => retorno.json()) //retorno unico, converte para json
        .then(function(cidades){
            //laço de repetição para preencher as cidades
            for(posicao in cidades){
                estrutura += `<option value="${cidades[posicao].cidades}">${cidades[posicao].nome}</option>`
            }

            //carregar dados no select
            document.querySelector("#cidade").innerHTML = estrutura
        })
})
        </script>
@endsection

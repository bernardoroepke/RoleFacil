<form id="form-salvar">
    @csrf
    <div class="accordion">
        <div class="accordion-item">
            <h2 class="text-center mt-2">Filtros</h2>
            <h2 class="accordion-header d-flex justify-content-between">
                <span class="distance-filter fs-4">
                    Distância
                </span>
                <span class="pt-2 pe-2">
                    <button type="button" onclick="obterDiferencaDistancia()" class="btn btn-outline-primary">
                        Filtrar
                    </button>
                </span>
            </h2>
            <div>
                <div class="accordion-body">
                    <input type="number" placeholder="50" id="input-range-distance" name="input-range-distance" class="input-range">
                    <input type="range" min="1" max="150" value="50" name="range_distance" id="range-distance">
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Categoria
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">
                <div class="accordion-body">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="restaurante">
                        <label class="form-check-label" for="bar">
                            Restaurante
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="bar">
                        <label class="form-check-label" for="bar">
                            Bar
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="padaria">
                        <label class="form-check-label" for="bar">
                            Padaria
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="padaria">
                        <label class="form-check-label" for="bar">
                            Sorveteria
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="eventos">
                        <label class="form-check-label" for="bar">
                            Eventos
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="pontoturistico">
                        <label class="form-check-label" for="bar">
                            Pontos Turísticos
                        </label>
                    </div>
                </div>
            </div>
        </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Ordernar por:
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">
                    <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Distancia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Preço
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault3">
                                Data
                            </label>
                        </div>

                    </div>
                </div>
            </div>
    </div>
</form>
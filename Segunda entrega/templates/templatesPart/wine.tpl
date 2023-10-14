<h3 class="titulo">{$tituloLista}</h3>
<div class="wine-details">
    <div class="wine-info">
        <div class="wine-info-sup">
            <div>
                <div class="cellar-name">
                    <p>Bodega: {$product->bodega}</p>
                </div>
                <div>
                    <p class="encabezado-table"> Cepa: {$product->cepa}</p>
                </div>
                <div>
                    <p class="encabezado-table">Año: {$product->anio}</p>
                </div>
                <div>
                    <p class="encabezado-table"> Maridaje: {$product->maridaje}</p>
                </div>
            </div>
            <div>
                <div>
                    <p class="encabezado-table"> Recomendado por la Pagina:
                        {if $product->recomendado}
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart-check"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M19.5 12.572l-3 2.928m-5.5 3.5a8916.99 8916.99 0 0 0 -6.5 -6.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                                </path>
                                <path d="M15 19l2 2l4 -4"></path>
                            </svg>
                        {else}
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart-down"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 20l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.907 6.12"></path>
                                <path d="M19 16v6"></path>
                                <path d="M22 19l-3 3l-3 -3"></path>
                            </svg>
                        {/if}
                    </p>
                </div>
                <div>
                    <div>
                        <p class="encabezado-table">Precio: ${$product->precio}-.</p>
                    </div>
                    <div>
                        <p class="encabezado-table">Stock: {$product->stock}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wine-description">
            <div>
                <p> Características: {$product->caracteristica}</p>
            </div>
        </div>
    </div>
</div>
<template>
    <b-navbar toggleable="lg" type="light" variant="light">
        <b-container>
            <b-navbar-brand href="#">Agenda</b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>
                <b-navbar-nav class="me-auto mb-2 mb-lg-0">
                    <b-nav-item router-link to="/">Página Inicial</b-nav-item>
                </b-navbar-nav>

                <form class="d-flex">
                    <b-form-input class="me-2" placeholder="Buscar"></b-form-input>
                    <b-button variant="outline-success" type="submit">
                        <i class="ri-search-line"></i>
                    </b-button>
                </form>
            </b-collapse>
        </b-container>
    </b-navbar>
</template>

<script>
export default {
    name: 'navbar-layout',
}
</script>
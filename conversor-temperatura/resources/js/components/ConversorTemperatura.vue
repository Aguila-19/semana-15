<template>
    <div class="contenedor">

        <h1>Conversor de Temperatura</h1>

        <label>Ingrese una temperatura</label>

        <input
            type="number"
            v-model="valor"
            placeholder="Ingrese temperatura"
        >

        <label>Seleccione la unidad</label>

        <select v-model="unidad">

            <option value="celsius">
                Celsius
            </option>

            <option value="fahrenheit">
                Fahrenheit
            </option>

            <option value="kelvin">
                Kelvin
            </option>

        </select>

        <div class="resultado">

            <h2>Resultados</h2>

            <p>
                Celsius:
                {{ celsius }} °C
            </p>

            <p>
                Fahrenheit:
                {{ fahrenheit }} °F
            </p>

            <p>
                Kelvin:
                {{ kelvin }} K
            </p>

        </div>

    </div>
</template>

<script>

export default {

    name: 'ConversorTemperatura',

    data() {

        return {

            valor: 0,
            unidad: 'celsius'

        }

    },

    computed: {

        celsius() {

            if (this.unidad === 'celsius') {

                return Number(this.valor).toFixed(2);

            }

            if (this.unidad === 'fahrenheit') {

                return ((this.valor - 32) * 5 / 9).toFixed(2);

            }

            return (this.valor - 273.15).toFixed(2);

        },

        fahrenheit() {

            if (this.unidad === 'fahrenheit') {

                return Number(this.valor).toFixed(2);

            }

            if (this.unidad === 'celsius') {

                return ((this.valor * 9 / 5) + 32).toFixed(2);

            }

            return (((this.valor - 273.15) * 9 / 5) + 32).toFixed(2);

        },

        kelvin() {

            if (this.unidad === 'kelvin') {

                return Number(this.valor).toFixed(2);

            }

            if (this.unidad === 'celsius') {

                return (Number(this.valor) + 273.15).toFixed(2);

            }

            return (((this.valor - 32) * 5 / 9) + 273.15).toFixed(2);

        }

    }

}

</script>

<style scoped>

.contenedor {

    width: 420px;
    margin: 50px auto;
    padding: 25px;
    border-radius: 12px;
    background: #f5f5f5;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
    font-family: Arial, Helvetica, sans-serif;

}

h1 {

    text-align: center;
    margin-bottom: 20px;

}

label {

    display: block;
    margin-top: 15px;
    font-weight: bold;

}

input,
select {

    width: 100%;
    padding: 10px;
    margin-top: 8px;
    border-radius: 6px;
    border: 1px solid #ccc;

}

.resultado {

    margin-top: 25px;
    padding: 15px;
    border-radius: 10px;
    background: white;

}

h2 {

    margin-bottom: 10px;

}

</style>
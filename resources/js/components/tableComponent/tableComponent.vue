<template>
  <div>
    <el-table :data="tableData" style="width: 100%" size="mini" height="500" max-height="1000">
      <el-table-column
        prop="name"
        class="columnclass"
        label="Nombre"
        width="150"
      >
      <!-- Cabecera -->
        <template slot-scope="scope" v-bind:text="text" slot="header">
          <label>Nombre</label>
          <el-select
            placeholder="Selecciona una opcion"
            size="mini"
            clearable
            style="text-align: center"
            v-model="tablefilters.name"
            controls-position="right"
          ></el-select>
        </template>
        <!-- Row -->
        <template slot-scope="scope">
        <el-popover trigger="hover" placement="top">
          <p>Name: {{ scope.row.name }}</p>
          <p>Address: {{ scope.row.direction }}</p>
          <div slot="reference" class="name-wrapper">
            <el-tag size="mini">{{ scope.row.name }}</el-tag>
          </div>
        </el-popover>
      </template>
      </el-table-column>

      <el-table-column prop="father_lastname" label="Apellido" width="150">
          <!-- Cabecera    -->
         <template slot-scope="scope" slot="header">
          <label>Apellidos</label>
          <el-input
            size="mini"
            clearable
            style="text-align: center"
            v-model="tablefilters.direccion"
            controls-position="right"
          ></el-input>
        </template>
      </el-table-column>

       <el-table-column prop="email" label="Apellido" width="150">
          <!-- Cabecera    -->
         <template slot-scope="scope" slot="header">
          <label>Email</label>
          <el-input
            size="mini"
            clearable
            style="text-align: center"
            v-model="tablefilters.direccion"
            controls-position="right"
          ></el-input>
        </template>
      </el-table-column>

       <el-table-column prop="birthday" label="Apellido" width="150">
          <!-- Cabecera    -->
         <template slot-scope="scope" slot="header">
          <label>Fecha nacimiento</label>
          <el-input
            size="mini"
            clearable
            style="text-align: center"
            v-model="tablefilters.direccion"
            controls-position="right"
          ></el-input>
        </template>
      </el-table-column>

      <el-table-column prop="city" label="Apellido" width="150">
          <!-- Cabecera    -->
         <template slot-scope="scope" slot="header">
          <label>Ciudad</label>
          <el-input
            size="mini"
            clearable
            style="text-align: center"
            v-model="tablefilters.direccion"
            controls-position="right"
          ></el-input>
        </template>
      </el-table-column>

      <el-table-column prop="state" label="Apellido" width="150">
          <!-- Cabecera    -->
         <template slot-scope="scope" slot="header">
          <label>Estado</label>
          <el-input
            size="mini"
            clearable
            style="text-align: center"
            v-model="tablefilters.direccion"
            controls-position="right"
          ></el-input>
        </template>
      </el-table-column>

       <el-table-column prop="school_name" label="Apellido" width="150">
          <!-- Cabecera    -->
         <template slot-scope="scope" slot="header">
          <label>Colegio</label>
          <el-input
            size="mini"
            clearable
            style="text-align: center"
            v-model="tablefilters.direccion"
            controls-position="right"
          ></el-input>
        </template>
      </el-table-column>

      <el-table-column prop="grade" label="Apellido" width="150">
          <!-- Cabecera    -->
         <template slot-scope="scope" slot="header">
          <label>Bio</label>
          <el-input
            size="mini"
            clearable
            style="text-align: center"
            v-model="tablefilters.direccion"
            controls-position="right"
          ></el-input>
        </template>
      </el-table-column>

      <el-table-column prop="age" label="Edad" width="150">
          <!-- Cabecera   -->
         <template slot-scope="scope" slot="header">
          <label>Edad</label>
          <el-input
            size="mini"
            clearable
            style="text-align: center"
            v-model="tablefilters.age"
            controls-position="right"
          ></el-input>
        </template>
         </el-table-column>
      <el-table-column prop="direction" label="Direccion" width="150">
          <!-- Cabecera -->
         <template slot="header">
          <label>Direccion</label>
          <el-input
            size="mini"
            clearable
            style="text-align: center"
            v-model="tablefilters.erp"
            controls-position="right"
          ></el-input>
        </template>

      </el-table-column>
      <el-table-column prop="Acciones" label="Acciones" width="150">
         <!-- Cabecera -->
         <template slot="header">
           <label>Acciones</label>
           <el-input
            size="mini"
            border = "0px"
            style="text-align: center; opacity:10%;"
            v-model="tablefilters.direccion"
            controls-position="right"
          ></el-input>
        </template>
          <!-- Row -->
         <template slot-scope="scope">
        <el-button
          size="mini"
          @click="handleEdit(scope.$index, scope.row)"><i class="fas fa-edit">Editar</i></el-button>
          <el-button
          size="mini"
          @click="handleEdit(scope.$index, scope.row)"><i class="fas fa-change">Modificar estado</i></el-button>

      </template>
      </el-table-column>
    </el-table>


  </div>
</template>
<script>
export default {
  props: {
    columns: {
      type: Array,
    },
  },
  data() {
    return {
      tablefilters: {
        name:null,
        direccion:null
      },
      tableColumns: {},
      tableData: [{}],
      display:false,
    };
  },
  mounted() {
    console.log("Hola");
    this.loadEstudiantes(this.tablefilters);
  },
  methods: {
    loadEstudiantes(filters) {
      this.axios.get("/students").then((response) => {
        this.tableData = response.data.data;
        console.log("this", this.tableData);
      });
    },
    handleEdit(indice,row){

    },
  },
};
</script>

<style>
.el-table__row .el-input .el-input__inner {
  border-style: none;
}
.hover-row .el-input .el-input__inner {
  border-style: solid;
}

.el-table th > .cell {
  text-transform: none;
  font-size: 13px;
  font-weight: bold;
  letter-spacing: unset;
  color: black;
}
</style>
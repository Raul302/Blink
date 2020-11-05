<template>
    <div class="container mt-3">
        <h3>Nuevo Contacto</h3>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-info">Datos generales</h5>
                <div class="form-row card-text">
                    <div class="form-group col-md-2">
                        <label for="inputEmail4">Nombre</label>
                        <input
                            type="text"
                            class="form-control"
                            id="inputEmail4"
                            v-model="form.student.name"
                            placeholder="Escriba su nombre"
                        />
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputPassword4">Apellido paterno</label>
                        <input
                            type="text"
                            class="form-control"
                            id="inputPassword4"
                            v-model="form.student.father_lastname"
                            placeholder="Apellido paterno"
                        />
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputPassword4">Apellido materno</label>
                        <input
                            type="text"
                            class="form-control"
                            id="inputPassword4"
                            v-model="form.student.mother_lastname"
                            placeholder="Apellido materno"
                        />
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputPassword4">Email</label>
                        <input
                            type="emall"
                            class="form-control"
                            id="inputPassword4"
                            v-model="form.student.email"
                            placeholder="Email"
                        />
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputPassword4">Telefono</label>
                        <input
                            type="tel"
                            class="form-control"
                            placeholder="5555555"
                            name="phone"
                            v-model="form.student.phone"
                            pattern="[+]{1}[0-9]{11,14}"
                            required
                        />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputPassword4">Fecha de nacimiento</label>
                        <el-date-picker
                            type="date"
                            format="yyyy-MM-dd"
                            v-model="form.student.birthday"
                            placeholder="Cumpleaños"
                        >
                        </el-date-picker>
                    </div>
                    <div class="form-group col-md-3">
                        <label style="display:block;" for="inputPassword4"
                            >Ciudad</label
                        >
                        <el-select
                            v-model="form.student.city"
                            filterable
                            remote
                            reserve-keyword
                            placeholder="Escriba una ciudad"
                        >
                            
                        </el-select>
                    </div>
                    <div class="form-group col-md-2">
                        <label style="display:block;" for="inputPassword4"
                            >Estado</label
                        >
                        <el-select
                            v-model="form.student.state"
                            filterable
                            remote
                            reserve-keyword
                            placeholder="Escriba una ciudad"
                        >
                            
                        </el-select>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin del card -->

        <div class="card mt-2">
            <div class="card-body">
                <h5 class="card-title text-info">Datos Academicos</h5>
                <div class="form-row card-text">
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Colegio</label>
                        <el-input
                            placeholder="Escriba el colegio"
                            v-model="form.student.school_name"
                        ></el-input>
                    </div>
                    <div class="form-group col-md-1">
                        <label for="inputEmail4">Grado</label>
                          <el-input-number v-model="form.student.grade" :min="1" :max="10"></el-input-number>
                    </div>
                </div>
            </div>
        </div>

 <div class="card mt-2">
            <div class="card-body">
                <h5 class="card-title text-info">Informacion de Padres</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Padre</h6>
                <div class="form-row card-text">
                  <div class="form-group col-md-2">
                        <label for="inputEmail4">Nombre</label>
                        <input
                            type="text"
                            v-model="form.father.name"
                            class="form-control"
                            id="inputEmail4"
                            placeholder="Nombre"
                        />
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputPassword4">Apellido paterno</label>
                        <input
                            type="text"
                            v-model="form.father.father_lastname"
                            class="form-control"
                            id="inputPassword4"
                            placeholder="Apellido paterno"
                        />
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputPassword4">Apellido materno</label>
                        <input
                            type="text"
                            v-model="form.father.father_mother_lastname"
                            class="form-control"
                            id="inputPassword4"
                            placeholder="Apellido materno"
                        />
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputPassword4">Email</label>
                        <input
                            type="emall"
                            v-model="form.father.email"
                            class="form-control"
                            id="inputPassword4"
                            placeholder="Email"
                        />
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputPassword4">Telefono</label>
                        <input
                            type="tel"
                            v-model="form.father.phone"
                            class="form-control"
                            placeholder="5555555"
                            name="phone"
                            pattern="[+]{1}[0-9]{11,14}"
                            required
                        />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputPassword4">Fecha de nacimiento</label>
                        <el-date-picker
                            v-model="form.father.birthday"
                            type="date"
                            placeholder="Cumpleaños"
                        >
                        </el-date-picker>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputEmail4">Direccion</label>
                        <el-input
                            placeholder="Escriba su direccion"
                            v-model="form.father.direction"
                        ></el-input>
                    </div>
                     <div class="form-group col-md-2">
                      <label for="inputEmail4">Estado civil</label>
                        <el-input
                            placeholder="Escriba su estado civil"
                            v-model="form.father.state_civil"
                        ></el-input>
                    </div>
                    </div>
                   <el-row>
                    <h6 class="card-subtitle mb-2 text-muted">Madre</h6> 
                    <el-checkbox-group v-model="checkbox" size="mini">
      <el-checkbox v-model="checkbox" @change="duplicated" size="mini" label="Mismos datos que el padre" border></el-checkbox>
    </el-checkbox-group>
                    </el-row>
                     <div class="form-row">
                     <div class="form-group col-md-2">
                        <label for="inputEmail4">Nombre</label>
                        <input
                            type="text"
                            v-model="form.mother.name"
                            class="form-control"
                            id="inputEmail4"
                            placeholder="Nombre"
                        />
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputPassword4">Apellido paterno</label>
                        <input
                            type="text"
                            v-model="form.mother.father_lastname"
                            class="form-control"
                            id="inputPassword4"
                            placeholder="Apellido paterno"
                        />
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputPassword4">Apellido materno</label>
                        <input
                            type="text"
                            v-model="form.mother.father_mother_lastname"
                            class="form-control"
                            id="inputPassword4"
                            placeholder="Apellido materno"
                        />
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputPassword4">Email</label>
                        <input
                            type="emall"
                            v-model="form.mother.email"
                            class="form-control"
                            id="inputPassword4"
                            placeholder="Email"
                        />
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputPassword4">Telefono</label>
                        <input
                            type="tel"
                            v-model="form.mother.phone"
                            class="form-control"
                            placeholder="5555555"
                            name="phone"
                            pattern="[+]{1}[0-9]{11,14}"
                            required
                        />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputPassword4">Fecha de nacimiento</label>
                        <el-date-picker
                            v-model="form.mother.birthday"
                            type="date"
                            placeholder="Cumpleaños"
                        >
                        </el-date-picker>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputEmail4">Direccion</label>
                        <el-input
                            placeholder="Escriba su direccion"
                            v-model="form.mother.direction"
                        ></el-input>
                    </div>
                     <div class="form-group col-md-2">
                      <label for="inputEmail4">Estado civil</label>
                        <el-input
                            placeholder="Escriba su estado civil"
                            v-model="form.mother.state_civil"
                        ></el-input>
                    </div>
                </div>
                </div>
            </div>
<el-row class="ml-2 mb-2">
</el-row>
        </div>
</template>

<script>
export default {
    data() {
        return {
          checkbox:false,
            form: {
              father:{},
              mother:{},
              student:{}
            }
        };
    },
    mounted() {
        console.log('form',this.form);
        console.log("Perro");
    },
    methods: {
      duplicated(){
        this.checkbox ? this.form.mother = {...this.form.father} : 'Ok';
        console.log('checkbox',this.checkbox);
      },
        saveStudent() {
           this.axios.post("/students/save",{form:this.form}).then(function (response) {
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        });
        }
    }
};
</script>

<style></style>

//adicionar os imports

import { TarefaModel } from "./model/TarefaModel.js";
import { TarefaView } from "./view/TarefaView.js";
import { TarefaView } from "./TarefaView.js";


const model = new TarefaModel();
const view = new TarefaView();
const controller = new TarefaController(model, view);

controller.init(); //iniciar o sistema
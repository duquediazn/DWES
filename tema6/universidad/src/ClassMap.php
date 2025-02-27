<?php

declare(strict_types=1);
/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'wsagrupaciones' => '\\StructType\\Wsagrupaciones',
            'wsagrupacionesResponse' => '\\StructType\\WsagrupacionesResponse',
            'ArrayOfClaseAgrupaciones' => '\\ArrayType\\ArrayOfClaseAgrupaciones',
            'ClaseAgrupaciones' => '\\StructType\\ClaseAgrupaciones',
            'wsfechaexamenesasi' => '\\StructType\\Wsfechaexamenesasi',
            'wsfechaexamenesasiResponse' => '\\StructType\\WsfechaexamenesasiResponse',
            'ArrayOfClaseFechaExamenesAsi' => '\\ArrayType\\ArrayOfClaseFechaExamenesAsi',
            'ClaseFechaExamenesAsi' => '\\StructType\\ClaseFechaExamenesAsi',
            'wsfechaexamenesasitotal' => '\\StructType\\Wsfechaexamenesasitotal',
            'wsfechaexamenesasitotalResponse' => '\\StructType\\WsfechaexamenesasitotalResponse',
            'ArrayOfClaseFechaExamenesAsiTotal' => '\\ArrayType\\ArrayOfClaseFechaExamenesAsiTotal',
            'ClaseFechaExamenesAsiTotal' => '\\StructType\\ClaseFechaExamenesAsiTotal',
            'wsfechaexamenesasinue' => '\\StructType\\Wsfechaexamenesasinue',
            'wsfechaexamenesasinueResponse' => '\\StructType\\WsfechaexamenesasinueResponse',
            'ArrayOfClaseFechaExamenesAsiNue' => '\\ArrayType\\ArrayOfClaseFechaExamenesAsiNue',
            'ClaseFechaExamenesAsiNue' => '\\StructType\\ClaseFechaExamenesAsiNue',
            'wsfechaexamenesplan' => '\\StructType\\Wsfechaexamenesplan',
            'wsfechaexamenesplanResponse' => '\\StructType\\WsfechaexamenesplanResponse',
            'ArrayOfClaseFechaExamenesPlan' => '\\ArrayType\\ArrayOfClaseFechaExamenesPlan',
            'ClaseFechaExamenesPlan' => '\\StructType\\ClaseFechaExamenesPlan',
            'wsasidepto' => '\\StructType\\Wsasidepto',
            'wsasideptoResponse' => '\\StructType\\WsasideptoResponse',
            'ArrayOfClaseAsiDepto' => '\\ArrayType\\ArrayOfClaseAsiDepto',
            'ClaseAsiDepto' => '\\StructType\\ClaseAsiDepto',
            'wsdatosasig' => '\\StructType\\Wsdatosasig',
            'wsdatosasigResponse' => '\\StructType\\WsdatosasigResponse',
            'ArrayOfClaseDatosAsig' => '\\ArrayType\\ArrayOfClaseDatosAsig',
            'ClaseDatosAsig' => '\\StructType\\ClaseDatosAsig',
            'wshorarioagrp' => '\\StructType\\Wshorarioagrp',
            'wshorarioagrpResponse' => '\\StructType\\WshorarioagrpResponse',
            'ArrayOfClaseHorarioAgrp' => '\\ArrayType\\ArrayOfClaseHorarioAgrp',
            'ClaseHorarioAgrp' => '\\StructType\\ClaseHorarioAgrp',
            'wshorarios' => '\\StructType\\Wshorarios',
            'wshorariosResponse' => '\\StructType\\WshorariosResponse',
            'ArrayOfClaseHorarios' => '\\ArrayType\\ArrayOfClaseHorarios',
            'ClaseHorarios' => '\\StructType\\ClaseHorarios',
            'wstitulosuni' => '\\StructType\\Wstitulosuni',
            'wstitulosuniResponse' => '\\StructType\\WstitulosuniResponse',
            'ArrayOfClaseTitulosUni' => '\\ArrayType\\ArrayOfClaseTitulosUni',
            'ClaseTitulosUni' => '\\StructType\\ClaseTitulosUni',
            'wsdatosplan' => '\\StructType\\Wsdatosplan',
            'wsdatosplanResponse' => '\\StructType\\WsdatosplanResponse',
            'ArrayOfClaseDatosPlan' => '\\ArrayType\\ArrayOfClaseDatosPlan',
            'ClaseDatosPlan' => '\\StructType\\ClaseDatosPlan',
            'wsplanesasig' => '\\StructType\\Wsplanesasig',
            'wsplanesasigResponse' => '\\StructType\\WsplanesasigResponse',
            'ArrayOfClasePlanesAsig' => '\\ArrayType\\ArrayOfClasePlanesAsig',
            'ClasePlanesAsig' => '\\StructType\\ClasePlanesAsig',
            'wsplanesdep' => '\\StructType\\Wsplanesdep',
            'wsplanesdepResponse' => '\\StructType\\WsplanesdepResponse',
            'ArrayOfClasePlanesDep' => '\\ArrayType\\ArrayOfClasePlanesDep',
            'ClasePlanesDep' => '\\StructType\\ClasePlanesDep',
            'wsdptoasig' => '\\StructType\\Wsdptoasig',
            'wsdptoasigResponse' => '\\StructType\\WsdptoasigResponse',
            'ArrayOfClaseDptoAsig' => '\\ArrayType\\ArrayOfClaseDptoAsig',
            'ClaseDptoAsig' => '\\StructType\\ClaseDptoAsig',
            'wsareasdpto' => '\\StructType\\Wsareasdpto',
            'wsareasdptoResponse' => '\\StructType\\WsareasdptoResponse',
            'ArrayOfClaseAreasDpto' => '\\ArrayType\\ArrayOfClaseAreasDpto',
            'ClaseAreasDpto' => '\\StructType\\ClaseAreasDpto',
            'wsdptocen' => '\\StructType\\Wsdptocen',
            'wsdptocenResponse' => '\\StructType\\WsdptocenResponse',
            'ArrayOfClaseDptoCen' => '\\ArrayType\\ArrayOfClaseDptoCen',
            'ClaseDptoCen' => '\\StructType\\ClaseDptoCen',
            'wsasiplan' => '\\StructType\\Wsasiplan',
            'wsasiplanResponse' => '\\StructType\\WsasiplanResponse',
            'ArrayOfClaseAsiPlan' => '\\ArrayType\\ArrayOfClaseAsiPlan',
            'ClaseAsiPlan' => '\\StructType\\ClaseAsiPlan',
            'wscalificaciones' => '\\StructType\\Wscalificaciones',
            'wscalificacionesResponse' => '\\StructType\\WscalificacionesResponse',
            'ArrayOfClaseCalificaciones' => '\\ArrayType\\ArrayOfClaseCalificaciones',
            'ClaseCalificaciones' => '\\StructType\\ClaseCalificaciones',
            'wsconvocatorias' => '\\StructType\\Wsconvocatorias',
            'wsconvocatoriasResponse' => '\\StructType\\WsconvocatoriasResponse',
            'ArrayOfClaseConvocatorias' => '\\ArrayType\\ArrayOfClaseConvocatorias',
            'ClaseConvocatorias' => '\\StructType\\ClaseConvocatorias',
            'wsgruposasi' => '\\StructType\\Wsgruposasi',
            'wsgruposasiResponse' => '\\StructType\\WsgruposasiResponse',
            'ArrayOfClaseGrupoAsi' => '\\ArrayType\\ArrayOfClaseGrupoAsi',
            'ClaseGrupoAsi' => '\\StructType\\ClaseGrupoAsi',
            'wsconvemovilidad' => '\\StructType\\Wsconvemovilidad',
            'wsconvemovilidadResponse' => '\\StructType\\WsconvemovilidadResponse',
            'ArrayOfClaseConveMovilidad' => '\\ArrayType\\ArrayOfClaseConveMovilidad',
            'ClaseConveMovilidad' => '\\StructType\\ClaseConveMovilidad',
            'wstitulospropiosuni' => '\\StructType\\Wstitulospropiosuni',
            'wstitulospropiosuniResponse' => '\\StructType\\WstitulospropiosuniResponse',
            'ArrayOfClaseTitulosPropiosUni' => '\\ArrayType\\ArrayOfClaseTitulosPropiosUni',
            'ClaseTitulosPropiosUni' => '\\StructType\\ClaseTitulosPropiosUni',
            'wsreqidiomab1plan' => '\\StructType\\Wsreqidiomab1plan',
            'wsreqidiomab1planResponse' => '\\StructType\\Wsreqidiomab1planResponse',
            'ClaseReqidiomab1plan' => '\\StructType\\ClaseReqidiomab1plan',
        ];
    }
}

<?php 

/* NethServer_Module_NetworkAdapter translation, language: en */

$L['bootproto_dhcp_label'] = 'DHCP';
$L['bootproto_label'] = 'Asignación de IP';
$L['bootproto_none_label'] = 'Estático';
$L['blue_label'] = 'Invitados (azul)';
$L['device_label'] = 'Dispositivo';
$L['gateway_label'] = 'Puerta de enlace';
$L['green_label'] = 'LAN (verde)';
$L['hwaddr_label'] = 'Dirección MAC';
$L['ipaddr_label'] = 'Dirección IP';
$L['orange_label'] = 'DMZ (naranja)';
$L['Key_label'] = 'Dispositivo';
$L['netmask_label'] = 'Mascara de Red';
$L['NetworkAdapter_Description'] = 'Cambiar configuracion de red';
$L['NetworkAdapter_Tags'] = 'adaptador de red redes ethernet';
$L['NetworkAdapter_Title'] = 'Red';
$L['red_label'] = 'Internet (rojo)';
$L['role_label'] = 'Rol';
$L['update_header_label'] = 'Actualizar dispositivo';
$L['interface-config_label'] = 'Configuración de Interfaz';
$L['valid_platform,interface-config,interface-role,3'] = "DHCP solo se puede utilizar en las interfaces rojas";
$L['valid_platform,interface-config,interface-role,4'] = "No se puede eliminar la ultima interfaz verde";
$L['No'] = 'No';
$L['Yes'] = 'Si';
$L['type_alias_label'] = 'Alias';
$L['type_bridge_label'] = 'Puente';
$L['type_bond_label'] = 'Enlace';
$L['type_vlan_label'] = 'VLAN';
$L['SetIpAddress_header'] = 'Configurar asignación de IP - ${0}';
$L['CreateLogicalInterface_label'] = 'Interfaz Nueva';
$L['CreateLogicalInterface_header'] = 'Nueva Interfaz Logica';
$L['vlanTag_label'] = 'Etiqueta';
$L['vlan_label'] = 'Interfaz';
$L['InterfaceType_label'] = 'Tipo';
$L['Next_label'] = 'Siguiente';
$L['Back_label'] = 'Atrás';
$L['Edit_label'] = 'Editar';
$L['Edit_header'] = 'Editar ${dev} - ${bus} ${model} ';
$L['Edit_description'] = "Estado del link es  \${link}\nSpeed \${speed} Mbit/s\nDriver \${driver}\nMac address \${mac}";
$L['Link_status_up'] = 'Activa';
$L['Link_status_down'] = 'Desactiva';
$L['Link_status_na'] = 'No Disponible';
$L['speed_label'] = 'Velocidad ${0} ';
$L['Confirm_header'] = 'Crear ${role}  interfaz ${device}';
$L['Action_create_bridge'] = 'Crear nueva interfaz de puente ${device}  con ${parts} ';
$L['Action_create_bond'] = 'Crear una nueva interfaz de enlace ${device} con ${parts}';
$L['Action_create_vlan'] = 'Crear una nueva interfaz VLAN ${device} en ${parts}';
$L['Action_create_role'] = 'Configurar rol a "${role}"';
$L['Action_set_static_ip'] = 'Configurar Direccion Ip Fija ${ipaddr}/${netmask} ';
$L['Action_use_dhcp'] = 'Obtener la configuración IP del servidor DHCP';
$L['Action_use_gateway'] = 'Usar puerta de enlace ${gateway} ';
$L['Action_use_no_gateway'] = 'No configure la puerta de enlace';
$L['Create_label'] = 'Crear interfaz';
$L['bridged_label'] = 'Puente';
$L['slave_label'] = 'Esclavo';
$L['CreateIpAlias_header'] = 'Crear IP alias "${0}"';
$L['ReleasePhysicalInterface_header'] = 'Liberar  ${0} ';
$L['ReleasePhysicalInterface_roled_message'] = 'Liberar rol ${role}  asignado a la interfaz fisica  ${device}? ';
$L['ReleasePhysicalInterface_slave_message'] = 'Eliminar ${device}  del enlace ${parent}? ';
$L['ReleasePhysicalInterface_bridged_message'] = 'Eliminar  ${device}  del puente ${parent}? ';
$L['DeleteLogicalInterface_label'] = 'Eliminar';
$L['DeleteLogicalInterface_header'] = 'Confirmar eliminación de ${0}';
$L['DeleteLogicalInterface_bond_message'] = "Eliminando interfaz puente  \${device}.\nElija un sucesor de sus interfaces esclavos para darle el rol actual y la configuracion de IP.";
$L['DeleteLogicalInterface_bridge_message'] = "Eliminando interfaz de puente  \${device}.\n Elija un sucesor de las interfaces de puente para darle el rol actual y  la configuracion de IP";
$L['DeleteLogicalInterface_vlan_message'] = "Confirmar eliminación de VLAN \${device}.";
$L['DeleteLogicalInterface_alias_message'] = "Confirmar eliminación de alias \${device}.";
$L['ReleasePhysicalInterface_label'] = 'Liberar rol';
$L['Release_label'] = 'Liberar Rol';
$L['CleanPhysicalInterface_label'] = 'Eliminar';
$L['CreateIpAlias_label'] = 'Crear alias de IP';
$L['successor_label'] = 'Sucesor';
$L['NoSuccessor_label'] = 'Ninguno';
$L['bond_label'] = 'Enlace';
$L['bridge_label'] = 'Puente';
$L['alias_label'] = 'Alias';
$L['hotspot_label'] = 'Hotspot';
$L['RenameInterface_header'] = 'Asignar roles a interfaces físicas';
$L['[leave untouched]'] = '-';
$L['cards_label'] = 'Interfaces físicas';
$L['CleanPhysicalInterface_header'] = 'Eliminar ${0}';
$L['Confirm device ${0} removal'] = 'Eliminar ${0} dispositivo de la base de datos?';
$L['Clean_label'] = 'Eliminar';
$L['Refresh_label'] = 'Actualizar estado de enlace';
$L['roleis_label'] = 'Rol';
$L['MAC: ${0}'] = 'MAC ${0}';
$L['Model: ${0}'] = 'Modelo ${0}';
$L['All roles are correctly assigned to network cards.'] = 'Todos los roles están correctamente asignados a las tarjetas de red.';
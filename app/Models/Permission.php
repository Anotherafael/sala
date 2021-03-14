<?php

namespace App\Models;

class Permission extends \Spatie\Permission\Models\Permission
{
    protected $table = 'permissions';

    public static function defaultPermissions()
    {
        return [
            array('name' => 'ambient_view', 'description' => 'Visualiza as ambientes'),
            array('name' => 'ambient_create', 'description' => 'Cria novo ambiente'),
            array('name' => 'ambient_edit', 'description' => 'Edita ambientes'),
            array('name' => 'ambient_inactive', 'description' => 'Inativa ambientes'),
           
            array('name' => 'subject_view', 'description' => 'Visualiza disciplina'),
            array('name' => 'subject_create', 'description' => 'Cria disciplina'),
            array('name' => 'subject_edit', 'description' => 'Edita disciplina'),
            array('name' => 'subject_inactive', 'description' => 'Inativa disciplina'),

            array('name' => 'course_view', 'description' => 'Visualiza curso'),
            array('name' => 'course_create', 'description' => 'Cria curso'),
            array('name' => 'course_edit', 'description' => 'Edita curso'),
            array('name' => 'course_inactive', 'description' => 'Inativa curso'),

            array('name' => 'news_view', 'description' => 'Visualiza noticia'),
            array('name' => 'news_create', 'description' => 'Cria noticia'),
            array('name' => 'news_edit', 'description' => 'Edita noticia'),
            array('name' => 'news_delete', 'description' => 'Deleta noticia'),

            array('name' => 'user_view', 'description' => 'Visualiza usuario'),
            array('name' => 'user_create', 'description' => 'Cria usuario'),
            array('name' => 'user_edit', 'description' => 'Edita usuario'),
            array('name' => 'user_inactive', 'description' => 'Inativa usuario'),

            array('name' => 'reason_view', 'description' => 'Visualiza motivo'),
            array('name' => 'reason_create', 'description' => 'Cria motivo'),
            array('name' => 'reason_edit', 'description' => 'Edita motivo'),
            array('name' => 'reason_inactive', 'description' => 'Inativa motivo'),
            
            array('name' => 'admin_schedule_view', 'description' => 'Visualiza Agendamentos admin'),
            array('name' => 'admin_schedule_confirm', 'description' => 'Confirma Agendamentos admin'),
            array('name' => 'professor_pdf', 'description' => 'Visualiza Pdfs professor'),
            array('name' => 'geral_pdf', 'description' => 'Visualiza Pdfs geral'),
            
            array('name' => 'user_type_view', 'description' => 'Visualiza Tipo Usuario'),
            array('name' => 'user_type_edit', 'description' => 'Edita Tipo Usuario'),

            array('name' => 'schedule_confirm_view', 'description' => 'Tela de Confirmação de Agendamento'),
            array('name' => 'professor_view', 'description' => 'Tela de geração de relatorio professor admin'),
            array('name' => 'geral_view', 'description' => 'Tela de geração de relatorio geral'),

            array('name' => 'ambient_type_view', 'description' => 'Visualiza tipo ambiente'),
            array('name' => 'ambient_type_create', 'description' => 'Cria tipo ambiente'),
            array('name' => 'ambient_type_edit', 'description' => 'Edita tipo ambiente'),
            array('name' => 'ambient_type_inactive', 'description' => 'Inactive Tipo ambiente'),

            array('name' => 'professor_report_user', 'description' => 'Relatório professor index'),
            array('name' => 'student_report_user', 'description' => 'Relatório aluno index'),
        ];
    }
}

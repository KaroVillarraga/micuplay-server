<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FlipCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('letters')->insert([
            'letter'=>'A',
            'type'=>'vowel',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/a_arcoiris.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/A.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/A_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'B',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/b_buho.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/B.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/B_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'C',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/c_cohete.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/C.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/C_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'CH',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/ch_chupete.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/CH.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/CH_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'D',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/d_dinosaurio.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/D.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/D_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'E',
            'type'=>'vowel',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/e_elefante.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/E.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/E_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'F',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/f_flor.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/F.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/F_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'G',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/g_globos.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/G.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/G_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'H',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/h_helado.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/H.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/H_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'I',
            'type'=>'vowel',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/i_iguana.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/I.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/I_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'J',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/j_jirafa.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/J.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/J_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'K',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/k_kiwi.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/K.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/K_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'L',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/l_luna.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/L.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/L_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'LL',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/ll_llave.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/LL.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/LL_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'M',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/m_mariposa.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/M.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/M_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'N',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/n_nube.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/N.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/N_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'Ñ',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/n2_nam.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/N2.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/N2_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'O',
            'type'=>'vowel',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/o_oso.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/O.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/O_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'P',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/p_pajaro.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/P.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/P_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'Q',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/q_queso.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/Q.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/Q_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'R',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/r_regalo.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/R.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/R_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'S',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/s_sol.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/S.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/S_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'T',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/t_tortuga.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/T.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/T_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'U',
            'type'=>'vowel',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/u_uvas.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/U.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/U_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'V',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/v_vela.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/V.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/V_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'W',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/w_wow.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/W.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/W_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'X',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/x_xilofono.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/X.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/X_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'Y',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/y_yoyo.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/Y.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/Y_animation.mp4'
            ]);
        DB::table('letters')->insert([
            'letter'=>'Z',
            'type'=>'consonant',
            'sound'=>'https://play.micukids.com/play/memorycards/audio/z_zapatos.mp3',
            'image'=>'https://play.micukids.com/play/memorycards/back/Z.jpg',
            'video'=>'https://play.micukids.com/play/flipcards/back/Z_animation.mp4'
            ]);
            }}
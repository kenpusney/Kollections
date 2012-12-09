using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Windows;
using System.Runtime.InteropServices;

namespace ForGet
{

    public partial class SuperForm : Form
    {
        //初始化本窗口的同时初始化另外一个
        QueryForm queryform = new QueryForm();

        //加载窗体组件
        public SuperForm()
        {
            InitializeComponent();
        }

        //Accept按钮按下事件响应
        private void ButtonAccept_Click(object sender, EventArgs e)
        {
            new SuperCtrl(TextKey.Text, TextValue.Text);
            TextKey.Text = "";
            TextValue.Text = "";
            Hide();
        }

        //Cancel按钮按下事件响应
        private void ButtonCancel_Click(object sender, EventArgs e)
        {
            TextKey.Text = "";
            TextValue.Text = "";
            Hide();
        }

        //New Pass菜单按下事件响应
        private void newPassToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Show();
        }

        //Exit菜单按下事件响应
        private void exitToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        //About菜单按下事件响应
        public void aboutToolStripMenuItem_Click(object sender, EventArgs e)
        {
            MessageBox.Show("This is an Small app written for remember your password.\n Author: KPSN.Leo", "About", MessageBoxButtons.OK, MessageBoxIcon.Information);
        }

        //双击托盘图标实践
        private void NotifyIcon_MouseDoubleClick(object sender, MouseEventArgs e)
        {
            Show();
        }

        //Query菜单事件响应
        private void queryPassToolStripMenuItem_Click(object sender, EventArgs e)
        {
            queryform.Show();
        }

        //窗体加载时的事件...可惜为什么突然不能用Hide方法
        public void SuperForm_Load(object sender, EventArgs e)
        {
            Hide();
        }

        //定义的TimerTick,当时间循环一个周期时,就会产生事件
        //待完成
        private void SuperTimer_Tick(object sender, EventArgs e)
        {
            new SuperReminder();
        }

        
    }
}
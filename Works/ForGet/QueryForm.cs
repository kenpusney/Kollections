using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace ForGet
{
    public partial class QueryForm : Form
    {
        public QueryForm()
        {
            InitializeComponent();
            Hide();//擦,正如我说,为什么这个Hide方法就可以!!!
        }

        //Query按钮按下事件响应
        private void ButtonQuery_Click(object sender, EventArgs e)
        {
            var x = new SuperCtrl();
            LabelResult.Text = "Results:\n" + x.Query(TextQuery.Text);
        }

        //Cancel按钮按下事件响应
        private void ButtonCancel_Click(object sender, EventArgs e)
        {
            LabelResult.Text = "";
            TextQuery.Text = "";
            Hide();
        }
    }
}

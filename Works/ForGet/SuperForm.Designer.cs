namespace ForGet
{
    partial class SuperForm
    {
        /// <summary>
        /// 必需的设计器变量。
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// 清理所有正在使用的资源。
        /// </summary>
        /// <param name="disposing">如果应释放托管资源，为 true；否则为 false。</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows 窗体设计器生成的代码

        /// <summary>
        /// 设计器支持所需的方法 - 不要
        /// 使用代码编辑器修改此方法的内容。
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(SuperForm));
            this.ButtonAccept = new System.Windows.Forms.Button();
            this.ButtonCancel = new System.Windows.Forms.Button();
            this.LabelTop = new System.Windows.Forms.Label();
            this.TextKey = new System.Windows.Forms.TextBox();
            this.NotifyIcon = new System.Windows.Forms.NotifyIcon(this.components);
            this.MenuShow = new System.Windows.Forms.ContextMenuStrip(this.components);
            this.newPassToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.queryPassToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.aboutToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.menuSeparator = new System.Windows.Forms.ToolStripSeparator();
            this.exitToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.TextValue = new System.Windows.Forms.MaskedTextBox();
            this.SuperTimer = new System.Windows.Forms.Timer(this.components);
            this.MenuShow.SuspendLayout();
            this.SuspendLayout();
            // 
            // ButtonAccept
            // 
            this.ButtonAccept.Location = new System.Drawing.Point(66, 93);
            this.ButtonAccept.Name = "ButtonAccept";
            this.ButtonAccept.Size = new System.Drawing.Size(82, 29);
            this.ButtonAccept.TabIndex = 0;
            this.ButtonAccept.Text = "Accept";
            this.ButtonAccept.UseVisualStyleBackColor = true;
            this.ButtonAccept.Click += new System.EventHandler(this.ButtonAccept_Click);
            // 
            // ButtonCancel
            // 
            this.ButtonCancel.DialogResult = System.Windows.Forms.DialogResult.Cancel;
            this.ButtonCancel.Location = new System.Drawing.Point(154, 93);
            this.ButtonCancel.Name = "ButtonCancel";
            this.ButtonCancel.Size = new System.Drawing.Size(82, 29);
            this.ButtonCancel.TabIndex = 1;
            this.ButtonCancel.Text = "Cancel";
            this.ButtonCancel.UseVisualStyleBackColor = true;
            this.ButtonCancel.Click += new System.EventHandler(this.ButtonCancel_Click);
            // 
            // LabelTop
            // 
            this.LabelTop.Location = new System.Drawing.Point(12, 9);
            this.LabelTop.Name = "LabelTop";
            this.LabelTop.Size = new System.Drawing.Size(237, 27);
            this.LabelTop.TabIndex = 2;
            this.LabelTop.Text = "Please enter your domain and your password in these two box below.";
            // 
            // TextDomain
            // 
            this.TextKey.Location = new System.Drawing.Point(12, 39);
            this.TextKey.Name = "TextDomain";
            this.TextKey.Size = new System.Drawing.Size(223, 21);
            this.TextKey.TabIndex = 3;
            // 
            // NotifyIcon
            // 
            this.NotifyIcon.BalloonTipIcon = System.Windows.Forms.ToolTipIcon.Info;
            this.NotifyIcon.ContextMenuStrip = this.MenuShow;
            this.NotifyIcon.Icon = ((System.Drawing.Icon)(resources.GetObject("NotifyIcon.Icon")));
            this.NotifyIcon.Text = "ForGetMyPass";
            this.NotifyIcon.Visible = true;
            this.NotifyIcon.MouseDoubleClick += new System.Windows.Forms.MouseEventHandler(this.NotifyIcon_MouseDoubleClick);
            // 
            // MenuShow
            // 
            this.MenuShow.BackColor = System.Drawing.SystemColors.ControlLightLight;
            this.MenuShow.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.newPassToolStripMenuItem,
            this.queryPassToolStripMenuItem,
            this.aboutToolStripMenuItem,
            this.menuSeparator,
            this.exitToolStripMenuItem});
            this.MenuShow.Name = "contextMenuStrip1";
            this.MenuShow.RenderMode = System.Windows.Forms.ToolStripRenderMode.Professional;
            this.MenuShow.Size = new System.Drawing.Size(112, 98);
            // 
            // newPassToolStripMenuItem
            // 
            this.newPassToolStripMenuItem.Name = "newPassToolStripMenuItem";
            this.newPassToolStripMenuItem.Size = new System.Drawing.Size(111, 22);
            this.newPassToolStripMenuItem.Text = "New";
            this.newPassToolStripMenuItem.Click += new System.EventHandler(this.newPassToolStripMenuItem_Click);
            // 
            // queryPassToolStripMenuItem
            // 
            this.queryPassToolStripMenuItem.Name = "queryPassToolStripMenuItem";
            this.queryPassToolStripMenuItem.Size = new System.Drawing.Size(111, 22);
            this.queryPassToolStripMenuItem.Text = "Query";
            this.queryPassToolStripMenuItem.Click += new System.EventHandler(this.queryPassToolStripMenuItem_Click);
            // 
            // aboutToolStripMenuItem
            // 
            this.aboutToolStripMenuItem.Name = "aboutToolStripMenuItem";
            this.aboutToolStripMenuItem.Size = new System.Drawing.Size(111, 22);
            this.aboutToolStripMenuItem.Text = "About";
            this.aboutToolStripMenuItem.Click += new System.EventHandler(this.aboutToolStripMenuItem_Click);
            // 
            // menuSeparator
            // 
            this.menuSeparator.Name = "menuSeparator";
            this.menuSeparator.Size = new System.Drawing.Size(108, 6);
            // 
            // exitToolStripMenuItem
            // 
            this.exitToolStripMenuItem.DoubleClickEnabled = true;
            this.exitToolStripMenuItem.Name = "exitToolStripMenuItem";
            this.exitToolStripMenuItem.Size = new System.Drawing.Size(111, 22);
            this.exitToolStripMenuItem.Text = "Exit";
            this.exitToolStripMenuItem.Click += new System.EventHandler(this.exitToolStripMenuItem_Click);
            // 
            // TextPass
            // 
            this.TextValue.Location = new System.Drawing.Point(12, 66);
            this.TextValue.Name = "TextPass";
            this.TextValue.PasswordChar = '*';
            this.TextValue.Size = new System.Drawing.Size(223, 21);
            this.TextValue.TabIndex = 4;
            // 
            // SuperTimer
            // 
            this.SuperTimer.Enabled = true;
            this.SuperTimer.Interval = 15000;
            this.SuperTimer.Tick += new System.EventHandler(this.SuperTimer_Tick);
            // 
            // SuperForm
            // 
            this.AcceptButton = this.ButtonAccept;
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 12F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.CancelButton = this.ButtonCancel;
            this.ClientSize = new System.Drawing.Size(247, 129);
            this.ControlBox = false;
            this.Controls.Add(this.TextValue);
            this.Controls.Add(this.TextKey);
            this.Controls.Add(this.LabelTop);
            this.Controls.Add(this.ButtonCancel);
            this.Controls.Add(this.ButtonAccept);
            this.Cursor = System.Windows.Forms.Cursors.Default;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "SuperForm";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "ForGetMyPass";
            this.Load += new System.EventHandler(this.SuperForm_Load);
            this.MenuShow.ResumeLayout(false);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button ButtonAccept;
        private System.Windows.Forms.Button ButtonCancel;
        private System.Windows.Forms.Label LabelTop;
        private System.Windows.Forms.TextBox TextKey;
        private System.Windows.Forms.MaskedTextBox TextValue;
        public System.Windows.Forms.NotifyIcon NotifyIcon;
        public System.Windows.Forms.ContextMenuStrip MenuShow;
        private System.Windows.Forms.ToolStripSeparator menuSeparator;
        public System.Windows.Forms.ToolStripMenuItem newPassToolStripMenuItem;
        public System.Windows.Forms.ToolStripMenuItem queryPassToolStripMenuItem;
        public System.Windows.Forms.ToolStripMenuItem aboutToolStripMenuItem;
        public System.Windows.Forms.ToolStripMenuItem exitToolStripMenuItem;
        private System.Windows.Forms.Timer SuperTimer;
    }
}


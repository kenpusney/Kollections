namespace ForGet
{
    partial class QueryForm
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.ButtonQuery = new System.Windows.Forms.Button();
            this.ButtonCancel = new System.Windows.Forms.Button();
            this.TextQuery = new System.Windows.Forms.TextBox();
            this.LabelResult = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // ButtonQuery
            // 
            this.ButtonQuery.Location = new System.Drawing.Point(199, 12);
            this.ButtonQuery.Name = "ButtonQuery";
            this.ButtonQuery.Size = new System.Drawing.Size(72, 21);
            this.ButtonQuery.TabIndex = 0;
            this.ButtonQuery.Text = "Query";
            this.ButtonQuery.UseVisualStyleBackColor = true;
            this.ButtonQuery.Click += new System.EventHandler(this.ButtonQuery_Click);
            // 
            // ButtonCancel
            // 
            this.ButtonCancel.DialogResult = System.Windows.Forms.DialogResult.Cancel;
            this.ButtonCancel.Location = new System.Drawing.Point(199, 183);
            this.ButtonCancel.Name = "ButtonCancel";
            this.ButtonCancel.Size = new System.Drawing.Size(72, 21);
            this.ButtonCancel.TabIndex = 1;
            this.ButtonCancel.Text = "Cancel";
            this.ButtonCancel.UseVisualStyleBackColor = true;
            this.ButtonCancel.Click += new System.EventHandler(this.ButtonCancel_Click);
            // 
            // BoxDomain
            // 
            this.TextQuery.Location = new System.Drawing.Point(12, 12);
            this.TextQuery.Name = "BoxDomain";
            this.TextQuery.Size = new System.Drawing.Size(179, 21);
            this.TextQuery.TabIndex = 2;
            // 
            // LabelPass
            // 
            this.LabelResult.Location = new System.Drawing.Point(10, 39);
            this.LabelResult.Name = "LabelPass";
            this.LabelResult.Size = new System.Drawing.Size(181, 171);
            this.LabelResult.TabIndex = 3;
            // 
            // QueryForm
            // 
            this.AcceptButton = this.ButtonQuery;
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 12F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.CancelButton = this.ButtonCancel;
            this.ClientSize = new System.Drawing.Size(279, 216);
            this.Controls.Add(this.LabelResult);
            this.Controls.Add(this.TextQuery);
            this.Controls.Add(this.ButtonCancel);
            this.Controls.Add(this.ButtonQuery);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedToolWindow;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "QueryForm";
            this.ShowIcon = false;
            this.ShowInTaskbar = false;
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Enter to process your query:";
            this.TopMost = true;
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button ButtonQuery;
        private System.Windows.Forms.Button ButtonCancel;
        private System.Windows.Forms.TextBox TextQuery;
        private System.Windows.Forms.Label LabelResult;

    }
}